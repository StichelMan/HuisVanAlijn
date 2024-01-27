<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;


class ImageController extends Controller
{

    public function getImage($filename, $width = 400)
    {
        $cacheKey = 'image_' . $filename . '_' . $width;
        return Cache::rememberForever($cacheKey, function () use ($filename, $width)
        {
            $path = public_path('storage/images/' . $filename . ".png");

            if (!file_exists($path))
            {
                abort(404);
            }
            try
            {
                $img = Image::make($path);
                $img->resize($width, null, function ($constraint)
                {
                    $constraint->aspectRatio();
                });

                return $img->response('png');
            } catch (Exception $exception)
            {
                return $exception;
            }
        });
    }

    public function getRelatedContent($id, $filename, $width)
    {
        $cacheKey = 'related_content_' . $id . '_' . $filename . '_' . $width;

        return Cache::rememberForever($cacheKey, function () use ($id, $filename, $width)
        {
            $path = public_path('storage/images/' . $id . "/" . $filename);

            if (!file_exists($path))
            {
                abort(404);
            }

            try
            {
                $img = Image::make($path);
                $img->resize($width, null, function ($constraint)
                {
                    $constraint->aspectRatio();
                });

                return $img->response('png');
            } catch (Exception $exception)
            {
                return $exception;
            }
        });
    }

    public function getNestedVideo($folder, $filename)
    {

        $path = public_path('storage/images/' . $folder . "/" . $filename);

        if (!file_exists($path))
        {
            abort(404);
        } else
        {
            return response()->file($path);
        }

    }

    public function getSceneImage($folder, $filename, $width)
    {
        $cacheKey = 'scene_image_' . $folder . '_' . $filename . '_' . $width;

        return Cache::rememberForever($cacheKey, function () use ($folder, $filename, $width)
        {
            $path = public_path('storage/images/' . $folder . "/" . $filename . ".png");

            if (!file_exists($path))
            {
                abort(404);
            }

            try
            {
                $img = Image::make($path);
                $img->resize($width, null, function ($constraint)
                {
                    $constraint->aspectRatio();
                });

                return $img->response('png');
            } catch (Exception $exception)
            {
                return $exception;
            }
        });
    }

    public function storeImage(Request $request)
    {
        try
        {
            $imageData = $request->input('imageData');
            $imageData = substr($imageData, strpos($imageData, ',') + 1);
            $decodedImageData = base64_decode($imageData);
            $filename = 'scene_' . uniqid() . '.png';
            $path = public_path('storage/images/scenes');

            // Use file_put_contents to store the image with the full path
            if (!file_exists($path))
            {
                mkdir($path, 0777, true);
            }
            file_put_contents($path . '/' . $filename, $decodedImageData);

            $this->checkAndRemoveOldFiles();

            return response()->json(['success' => true, 'message' => 'Image stored successfully']);
        } catch (Exception $e)
        {
            return response()->json(['success' => false, 'message' => $e->getMessage()]);
        }
    }

    public function checkAndRemoveOldFiles()
{
    $path = public_path('storage/images/scenes');
    $files = scandir($path);

    $files = array_diff($files, ['.', '..']);

    if (count($files) > 20) {
        usort($files, function ($a, $b) use ($path) {
            return filemtime("$path/$a") - filemtime("$path/$b");
        });

        $oldestFile = array_shift($files);
        unlink("$path/$oldestFile");
    }
}

    public function getRandomSceneImage($width)
    {
        $cacheKey = 'random_scene_image_' . $width;

        return Cache::rememberForever($cacheKey, function () use ($width)
        {
            $path = public_path('storage/images/scenes/');

            $filesystem = new Filesystem();

            if (!$filesystem->isDirectory($path))
            {
                abort(404);
            }

            try
            {
                $files = $filesystem->files($path);

                if (empty($files))
                {
                    abort(404);
                }

                $randomFile = $files[array_rand($files)];

                $img = Image::make($filesystem->get($randomFile));
                $img->resize($width, null, function ($constraint)
                {
                    $constraint->aspectRatio();
                });

                return $img->response('png');
            } catch (Exception $exception)
            {
                return $exception;
            }
        });
    }
}

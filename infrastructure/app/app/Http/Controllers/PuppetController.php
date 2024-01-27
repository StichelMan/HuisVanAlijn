<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Maker;
use App\Models\Production;
use App\Models\Puppet;
use App\Models\Room;
use App\Models\Type;
use Illuminate\Http\Request;

/**
 * @OA\Info(title="Puppet API", version="0.1")
 */
class PuppetController extends Controller
{
    /**
     * Get rooms
     *
     * @param string $lang Language code
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @OA\Get(
     *     path="/api/{lang}/rooms/",
     *     operationId="getRooms",
     *     tags={"Rooms"},
     *     summary="Get rooms",
     *     @OA\Parameter(
     *         name="lang",
     *         in="path",
     *         description="Language code",
     *         required=true,
     *         @OA\Schema(type="string")
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Successful operation",
     *         @OA\JsonContent(
     *             type="array",
     *             @OA\Items(
     *                 type="object",
     *                 @OA\Property(property="id", type="integer", format="int64"),
     *                 @OA\Property(property="roomnumber", type="integer"),
     *                 @OA\Property(property="language_id", type="string", maxLength=2),
     *                 @OA\Property(property="name", type="string"),
     *             )
     *         )
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Rooms not found",
     *     )
     * )
     */
    public function getRooms($lang)
    {
        $rooms = Room::where('language_id', $lang)->get();
        return response()->json(['rooms'=>$rooms]);
    }

    /**
     * Get puppets in a room
     *
     * @param string $lang Language code
     * @param string $roomnumber Room number
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @OA\Get(
     *     path="/api/{lang}/room/{roomnumber}/puppets",
     *     operationId="getPuppetsOnRoom",
     *     tags={"Puppets"},
     *     summary="Get puppets in a room",
     *     @OA\Parameter(
     *         name="lang",
     *         in="path",
     *         description="Language code",
     *         required=true,
     *         @OA\Schema(type="string")
     *     ),
     *     @OA\Parameter(
     *         name="roomnumber",
     *         in="path",
     *         description="Room number",
     *         required=true,
     *         @OA\Schema(type="string")
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Successful operation",
     *         @OA\JsonContent(
     *             type="array",
     *             @OA\Items(
     *                 type="object",
     *                 @OA\Property(property="id", type="integer", format="int64"),
     *                 @OA\Property(property="name", type="string"),
     *                 @OA\Property(property="object_number", type="string"),
     *                 @OA\Property(property="date", type="string", format="string"),
     *                 @OA\Property(property="language_id", type="string"),
     *                 @OA\Property(property="info", type="string"),
     *                 @OA\Property(property="room_id", type="integer", format="int64"),
     *                 @OA\Property(property="company_id", type="integer", format="int64"),
     *                 @OA\Property(property="type_id", type="integer", format="int64"),
     *                 @OA\Property(property="created_at", type="string", format="datetime"),
     *                 @OA\Property(property="updated_at", type="string", format="datetime"),
     *             )
     *         )
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Room not found",
     *     )
     * )
     */
    public function getPuppetsOnRoom($lang, $roomnumber)
    {
        $room = Room::with('puppets')
            ->where('language_id', $lang)
            ->where('roomnumber', $roomnumber)
            ->firstOrFail();
        $puppets = $room->puppets;
        return response()->json(['puppets'=>$puppets]);
    }

    /**
     * Get a puppet
     *
     * @param string $lang Language code
     * @param string $objectnumber Object number
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @OA\Get(
     *     path="/api/{lang}/puppet/{objectnumber}",
     *     operationId="getPuppet",
     *     tags={"Puppets"},
     *     summary="Get a puppet",
     *     @OA\Parameter(
     *         name="lang",
     *         in="path",
     *         description="Language code",
     *         required=true,
     *         @OA\Schema(type="string")
     *     ),
     *     @OA\Parameter(
     *         name="objectnumber",
     *         in="path",
     *         description="Object number",
     *         required=true,
     *         @OA\Schema(type="string")
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Successful operation",
    @OA\JsonContent(
    type="object",
    @OA\Property(property="id", type="integer", format="int64"),
    @OA\Property(property="name", type="string"),
    @OA\Property(property="object_number", type="string"),
    @OA\Property(property="date", type="string", format="string"),
    @OA\Property(property="language_id", type="string"),
    @OA\Property(property="info", type="string"),
    @OA\Property(property="room_id", type="integer", format="int64"),
    @OA\Property(property="company_id", type="integer", format="int64"),
    @OA\Property(property="type_id", type="integer", format="int64"),
    @OA\Property(property="created_at", type="string", format="datetime"),
    @OA\Property(property="updated_at", type="string", format="datetime"),
    @OA\Property(property="makers", type="array",
    @OA\Items(
    type="object",
    @OA\Property(property="id", type="integer", format="int64"),
    @OA\Property(property="name", type="string"),
    @OA\Property(property="language_id", type="string"),
    )
    ),
    @OA\Property(property="productions", type="array",
    @OA\Items(
    type="object",
    @OA\Property(property="id", type="integer", format="int64"),
    @OA\Property(property="name", type="string"),
    @OA\Property(property="language_id", type="string"),
    )
    ),
    @OA\Property(property="room", type="object",
    @OA\Property(property="id", type="integer", format="int64"),
    @OA\Property(property="roomnumber", type="integer", format="int64"),
    @OA\Property(property="language_id", type="string"),
    @OA\Property(property="name", type="string"),
    ),
    @OA\Property(property="company", type="object",
    @OA\Property(property="id", type="integer", format="int64"),
    @OA\Property(property="name", type="string"),
    @OA\Property(property="language_id", type="string"),
    ),
    @OA\Property(property="type", type="object",
    @OA\Property(property="id", type="integer", format="int64"),
    @OA\Property(property="name", type="string"),
    @OA\Property(property="language_id", type="string"),
    @OA\Property(property="gameRelevant", type="integer", format="int64"),
    ),
    )
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Puppet not found",
     *     )
     * )
     */
    public function getPuppet($lang, $objectnumber)
    {
        // Retrieve puppet information from the database
        $puppet = Puppet::with('makers', 'productions', 'room', 'company', 'type')
            ->where('language_id', $lang)
            ->where('object_number', $objectnumber)
            ->first();

        if (!$puppet) {
            return response()->json(['error' => 'Puppet not found'], 404);
        }

        $imageDirectory = public_path("storage/images/$objectnumber/");

        if (file_exists($imageDirectory)) {
            $imageFiles = scandir($imageDirectory);
            $puppet->related_images = array_values(array_filter($imageFiles, function ($file) {
                return !in_array($file, ['.', '..']);
            }));
        } else {
            $puppet->related_images = [];
        }

        return response()->json(['puppet' => $puppet]);
    }
    public function getPuppetsImages($lang)
    {
        $images = [];
        $puppets = Puppet::where('language_id', $lang)->get();
        foreach ($puppets as $puppet) {

            $imagePath = public_path("storage/images/$puppet->object_number.png");

            if (file_exists($imagePath)) {
                $images[] = [
                    'name' => $puppet->name,
                    'imageName' => "{$puppet->object_number}.png",
                ];
            }
        }

        return response()->json(['images' => $images]);
    }


    public function getPuppetsImagesOnRoom($lang,$roomnumber)
    {
        $room = Room::with('puppets')
            ->where('language_id', $lang)
            ->where('roomnumber', $roomnumber)
            ->firstOrFail();
        $puppets = $room->puppets;

        $images =[];
        foreach ($puppets as $puppet) {

            $imagePath = public_path("storage/images/$puppet->object_number.png");

            if (file_exists($imagePath)) {
                $images[] = [
                    'name' => $puppet->name,
                    'imageName' => "{$puppet->object_number}.png",
                ];
            }
        }

        return response()->json(['images' => $images]);
    }
    public function getBackgroundImages()
    {
        $directory = public_path("storage/images/backgrounds");

        $images = array_map(function ($image) {
            return [
                'imageName' => basename($image),
                'name' => pathinfo($image, PATHINFO_FILENAME),
            ];
        }, glob($directory . '/*.png'));

        return response()->json(['images' => $images]);
    }

    public function getExpressionsImages()
    {
        $directory = public_path("storage/images/expressions");

        $images = array_map(function ($image) {
            return [
                'imageName' => basename($image),
                'name' => pathinfo($image, PATHINFO_FILENAME),
            ];
        }, glob($directory . '/*.png'));

        return response()->json(['images' => $images]);
    }


    public function getScenemakerImages()
    {
        $directories = [
            'puppets' => public_path("storage/images/scenePuppets"),
            'expressions' => public_path("storage/images/expressions"),
            'backgrounds' => public_path("storage/images/backgrounds"),
        ];

        $images = [];

        foreach ($directories as $key => $directory) {
            $imageNames = array_map(
                fn($file) => pathinfo($file, PATHINFO_FILENAME), // strip extension
                array_map('basename', glob($directory . '/*.png'))
            );

            $images[$key] = $imageNames;
        }

        return response()->json(['images' => $images]);
    }




    /**
     * Get game data
     *
     * @param string $lang Language code
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @OA\Get(
     *     path="/api/{lang}/game",
     *     operationId="getGameData",
     *     tags={"Game"},
     *     summary="Get game data",
     *     @OA\Parameter(
     *         name="lang",
     *         in="path",
     *         description="Language code",
     *         required=true,
     *         @OA\Schema(type="string")
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Successful operation",
     *         @OA\JsonContent(
     *             type="object",
     *             @OA\Property(property="types", type="array", @OA\Items(
     *                 type="object",
     *                 @OA\Property(property="id", type="integer", format="int64"),
     *                 @OA\Property(property="name", type="string"),
     *                 @OA\Property(property="language_id", type="string"),
     *                 @OA\Property(property="gameRelevant", type="integer", format="int64")
     *             )),
     *             @OA\Property(property="puppets", type="array", @OA\Items(
     *                 type="object",
     *                 @OA\Property(property="id", type="integer", format="int64"),
     *                 @OA\Property(property="name", type="string"),
     *                 @OA\Property(property="object_number", type="string"),
     *                 @OA\Property(property="date", type="string", format="string"),
     *                 @OA\Property(property="language_id", type="string"),
     *                 @OA\Property(property="info", type="string"),
     *                 @OA\Property(property="room_id", type="integer", format="int64"),
     *                 @OA\Property(property="company_id", type="integer", format="int64"),
     *                 @OA\Property(property="type_id", type="integer", format="int64"),
     *                 @OA\Property(property="created_at", type="string", format="datetime"),
     *                 @OA\Property(property="updated_at", type="string", format="datetime")
     *             )),
     *         )
     *     )
     * )
     */
    public function getGameData($lang)
    {
        $types = Type::where('gameRelevant', 1)->where('language_id', $lang)->get();
        $puppets = [];

        foreach ($types as $type) {
            $randomPuppet = Puppet::where('type_id', $type->id)->where('language_id', $lang)
                ->inRandomOrder()
                ->first();

            if ($randomPuppet) {
                $puppets[] = $randomPuppet;
            }
        }

        return response()->json(['types' => $types, 'puppets' => $puppets]);
    }

    /**
     * Get all puppets
     *
     * @param string $lang Language code
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @OA\Get(
     *     path="/api/{lang}/puppets",
     *     operationId="getPuppets",
     *     tags={"Puppets"},
     *     summary="Get all puppets",
     *     @OA\Parameter(
     *         name="lang",
     *         in="path",
     *         description="Language code",
     *         required=true,
     *         @OA\Schema(type="string")
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Successful operation",
     *         @OA\JsonContent(
     * type="object",
     * @OA\Property(property="id", type="integer", format="int64"),
     * @OA\Property(property="name", type="string"),
     * @OA\Property(property="object_number", type="string"),
     * @OA\Property(property="date", type="string", format="string"),
     * @OA\Property(property="language_id", type="string"),
     * @OA\Property(property="info", type="string"),
     * @OA\Property(property="room_id", type="integer", format="int64"),
     * @OA\Property(property="company_id", type="integer", format="int64"),
     * @OA\Property(property="type_id", type="integer", format="int64"),
     * @OA\Property(property="created_at", type="string", format="datetime"),
     * @OA\Property(property="updated_at", type="string", format="datetime"),
     * @OA\Property(property="makers", type="array",
     * @OA\Items(
     * type="object",
     * @OA\Property(property="id", type="integer", format="int64"),
     * @OA\Property(property="name", type="string"),
     * @OA\Property(property="language_id", type="string"),
     * )
     * ),
     * @OA\Property(property="productions", type="array",
     * @OA\Items(
     * type="object",
     * @OA\Property(property="id", type="integer", format="int64"),
     * @OA\Property(property="name", type="string"),
     * @OA\Property(property="language_id", type="string"),
     * )
     * ),
     * @OA\Property(property="room", type="object",
     * @OA\Property(property="id", type="integer", format="int64"),
     * @OA\Property(property="roomnumber", type="integer", format="int64"),
     * @OA\Property(property="language_id", type="string"),
     * @OA\Property(property="name", type="string"),
     * ),
     * @OA\Property(property="company", type="object",
     * @OA\Property(property="id", type="integer", format="int64"),
     * @OA\Property(property="name", type="string"),
     * @OA\Property(property="language_id", type="string"),
     * ),
     * @OA\Property(property="type", type="object",
     * @OA\Property(property="id", type="integer", format="int64"),
     * @OA\Property(property="name", type="string"),
     * @OA\Property(property="language_id", type="string"),
     * @OA\Property(property="gameRelevant", type="integer", format="int64"),
     * ),
     * )
     *     )
     * )
     */
    public function getPuppets($lang)
    {
        $puppets = Puppet::with('makers', 'productions', 'room', 'company', 'type')->where('language_id', $lang)->get();
        return response()->json(['puppets' => $puppets]);
    }

    /**
     * Get all companies
     *
     * @param string $lang Language code
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @OA\Get(
     *     path="/api/{lang}/companies",
     *     operationId="getCompanies",
     *     tags={"Companies"},
     *     summary="Get all companies",
     *     @OA\Parameter(
     *         name="lang",
     *         in="path",
     *         description="Language code",
     *         required=true,
     *         @OA\Schema(type="string")
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Successful operation",
     *         @OA\JsonContent(
     *              type="array",
     *              @OA\Items(
     *                  type="object",
     *                  @OA\Property(property="id", type="integer", format="int64"),
     *                  @OA\Property(property="name", type="string"),
     *                  @OA\Property(property="language_id", type="string"),
     *                  @OA\Property(property="puppets", type="array", @OA\Items(
     *                      type="object",
     *                      @OA\Property(property="id", type="integer", format="int64"),
     *                      @OA\Property(property="name", type="string"),
     *                      @OA\Property(property="object_number", type="string"),
     *                      @OA\Property(property="date", type="string", format="string"),
     *                      @OA\Property(property="language_id", type="string"),
     *                      @OA\Property(property="info", type="string"),
     *                      @OA\Property(property="room_id", type="integer", format="int64"),
     *                      @OA\Property(property="company_id", type="integer", format="int64"),
     *                      @OA\Property(property="type_id", type="integer", format="int64"),
     *                      @OA\Property(property="created_at", type="string", format="datetime"),
     *                      @OA\Property(property="updated_at", type="string", format="datetime")
     *                  )),
     *              )
     *          )
     *     )
     * )
     */
    public function getCompanies($lang)
    {
        $companies = Company::with('puppets')->where('language_id',$lang)->get();
        return response()->json(['companies' => $companies]);
    }

    /**
     * Get type information
     *
     * @param string $lang Language code
     * @param int $typeId Type ID
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @OA\Get(
     *     path="/api/{lang}/types",
     *     operationId="getType",
     *     tags={"Types"},
     *     summary="Get type information",
     *     @OA\Parameter(
     *         name="lang",
     *         in="path",
     *         description="Language code",
     *         required=true,
     *         @OA\Schema(type="string")
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Successful operation",
     *         @OA\JsonContent(
     *             type="object",
     *             @OA\Property(property="id", type="integer", format="int64"),
     *             @OA\Property(property="name", type="string"),
     *             @OA\Property(property="language_id", type="string"),
     *             @OA\Property(property="gameRelevant", type="integer", format="int64"),
     *             @OA\Property(property="puppets", type="array", @OA\Items(
     *                 type="object",
     *                 @OA\Property(property="id", type="integer", format="int64"),
     *                 @OA\Property(property="name", type="string"),
     *                 @OA\Property(property="object_number", type="string"),
     *                 @OA\Property(property="date", type="string", format="string"),
     *                 @OA\Property(property="language_id", type="string"),
     *                 @OA\Property(property="info", type="string"),
     *                 @OA\Property(property="room_id", type="integer", format="int64"),
     *                 @OA\Property(property="company_id", type="integer", format="int64"),
     *                 @OA\Property(property="type_id", type="integer", format="int64"),
     *                 @OA\Property(property="created_at", type="string", format="datetime"),
     *                 @OA\Property(property="updated_at", type="string", format="datetime")
     *             )),
     *         )
     *     )
     * )
     */
    public function getTypes($lang)
    {
        $types = Type::with('puppets')->where('language_id',$lang)->get();
        return response()->json(['types' => $types]);
    }

    /**
     * Get all puppet makers
     *
     * @param string $lang Language code
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @OA\Get(
     *     path="/api/{lang}/makers",
     *     operationId="getMakers",
     *     tags={"Makers"},
     *     summary="Get all puppet makers",
     *     @OA\Parameter(
     *         name="lang",
     *         in="path",
     *         description="Language code",
     *         required=true,
     *         @OA\Schema(type="string")
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Successful operation",
     *         @OA\JsonContent(
     *              type="array",
     *              @OA\Items(
     *                  type="object",
     *                  @OA\Property(property="id", type="integer", format="int64"),
     *                  @OA\Property(property="name", type="string"),
     *                  @OA\Property(property="language_id", type="string"),
     *                  @OA\Property(property="puppets", type="array", @OA\Items(
     *                      type="object",
     *                      @OA\Property(property="id", type="integer", format="int64"),
     *                      @OA\Property(property="name", type="string"),
     *                      @OA\Property(property="object_number", type="string"),
     *                      @OA\Property(property="date", type="string", format="string"),
     *                      @OA\Property(property="language_id", type="string"),
     *                      @OA\Property(property="info", type="string"),
     *                      @OA\Property(property="room_id", type="integer", format="int64"),
     *                      @OA\Property(property="company_id", type="integer", format="int64"),
     *                      @OA\Property(property="type_id", type="integer", format="int64"),
     *                      @OA\Property(property="created_at", type="string", format="datetime"),
     *                      @OA\Property(property="updated_at", type="string", format="datetime")
     *                  )),
     *              )
     *          )
     *     )
     * )
     */
    public function getMakers($lang)
    {
        $makers = Maker::with('puppets')->where('language_id',$lang)->get();
        return response()->json(['makers' => $makers]);
    }

    /**
     * Get all puppet productions
     *
     * @param string $lang Language code
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @OA\Get(
     *     path="/api/{lang}/productions",
     *     operationId="getProductions",
     *     tags={"Productions"},
     *     summary="Get all puppet productions",
     *     @OA\Parameter(
     *         name="lang",
     *         in="path",
     *         description="Language code",
     *         required=true,
     *         @OA\Schema(type="string")
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Successful operation",
     *        @OA\JsonContent(
     *              type="array",
     *              @OA\Items(
     *                  type="object",
     *                  @OA\Property(property="id", type="integer", format="int64"),
     *                  @OA\Property(property="name", type="string"),
     *                  @OA\Property(property="language_id", type="string"),
     *                  @OA\Property(property="puppets", type="array", @OA\Items(
     *                      type="object",
     *                      @OA\Property(property="id", type="integer", format="int64"),
     *                      @OA\Property(property="name", type="string"),
     *                      @OA\Property(property="object_number", type="string"),
     *                      @OA\Property(property="date", type="string", format="string"),
     *                      @OA\Property(property="language_id", type="string"),
     *                      @OA\Property(property="info", type="string"),
     *                      @OA\Property(property="room_id", type="integer", format="int64"),
     *                      @OA\Property(property="company_id", type="integer", format="int64"),
     *                      @OA\Property(property="type_id", type="integer", format="int64"),
     *                      @OA\Property(property="created_at", type="string", format="datetime"),
     *                      @OA\Property(property="updated_at", type="string", format="datetime")
     *                  )),
     *              )
     *          )
     *         )
     *     )
     * )
     */
    public function getProductions($lang)
    {
        $productions = Production::with('puppets')->where('language_id', $lang)->get();
        return response()->json(['&productions' => $productions]);
    }
}


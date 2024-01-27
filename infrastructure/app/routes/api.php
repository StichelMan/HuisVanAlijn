<?php

use App\Http\Controllers\ImageController;
use App\Http\Controllers\PuppetController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

/*scene maker backgrounds
memorygame video

*/


Route::get('/{lang}/companies',[PuppetController::class,'getCompanies']);
Route::get('/{lang}/types',[PuppetController::class,'getTypes']);
Route::get('/{lang}/makers',[PuppetController::class,'getMakers']);
Route::get('/{lang}/productions',[PuppetController::class,'getProductions']);

Route::get('/{lang}/rooms',[PuppetController::class,'getRooms'])->whereNumber('roomnumber');//get all rooms with language_id = $lang
Route::get('/{lang}/room/{roomnumber}/puppets',[PuppetController::class,'getPuppetsOnRoom'])->whereNumber('roomnumber');//zonder relations
Route::get('/{lang}/puppet/{objectnumber}',[PuppetController::class,'getPuppet']);//puppet with relations(makers,puppets)

Route::get('/{lang}/game',[PuppetController::class,'getGameData']);//types where gameRelevant = 1 and each type get a random puppet with that type

Route::get('/{lang}/puppets',[PuppetController::class,'getPuppets'])->whereNumber('roomnumber');//zonder relations
Route::get('/{lang}/scene/puppets',[PuppetController::class,'getPuppetsImages']);
Route::get('/{lang}/scene/room/{id}/puppets',[PuppetController::class,'getPuppetsImagesOnRoom'])->whereNumber('roomnumber');
Route::get('/scene/backgrounds',[PuppetController::class,'getBackgroundImages']);
Route::get('/scene/expressions',[PuppetController::class,'getExpressionsImages']);
Route::get('/scene',[PuppetController::class,'getScenemakerImages']);

Route::get('/image/random/{width}', [ImageController::class, 'getRandomSceneImage'])->whereNumber('width');
Route::get('/image/{filename}/{width}', [ImageController::class, 'getImage'])->whereNumber('width');
Route::get('/relatedContent/{id}/{filename}/{width}', [ImageController::class, 'getRelatedContent'])->whereNumber('width');
Route::get('/sceneImage/{folder}/{filename}/{width}', [ImageController::class, 'getSceneImage'])->whereNumber('width');
Route::get('/nestedVideo/{folder}/{filename}', [ImageController::class, 'getNestedVideo']);
Route::post('/image/scene', [ImageController::class, 'storeImage']);




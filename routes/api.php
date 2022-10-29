<?php
use App\Models\Event;
use App\Models\NewsletterReg;
use App\Models\Comment;

use Illuminate\Http\Request;
use App\Http\Controllers\EventsApiController;
use App\Http\Controllers\NewsletterRegsApiController;
use App\Http\Controllers\CommentsApiController;

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/events', [EventsApiController::class, 'index']);
Route::post('/events', [EventsApiController::class, 'store']);
Route::put('/events/{event}', [EventsApiController::class, 'update']);
Route::delete('/events/{event}', [EventsApiController::class, 'destroy']);
Route::get('/events/{id}', [EventsApiController::class, 'getEvent']);
Route::get('/newsletter', [NewsletterRegsApiController::class, 'index']);
Route::post('/newsletter', [NewsletterRegsApiController::class, 'store']);
Route::post('/events/{id}/comment', [CommentsApiController::class, 'store']);




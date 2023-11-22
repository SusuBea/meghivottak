<?php

use App\Http\Controllers\EventController;
use App\Http\Controllers\OrganisatorController;
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


Route::get('/organisators' , [OrganisatorController::class, 'index']);
Route::get('/organisators/{id}' , [OrganisatorController::class, 'show']);
Route::post('/organisators' , [OrganisatorController::class, 'store']);
Route::put('/organisators/{id}' , [OrganisatorController::class, 'update']);
Route::delete('/organisators/{id}' , [OrganisatorController::class, 'destroy']);
Route::resource('/events', EventController::class);
Route::resource('/invitations', InvitationController::class);
Route::resource('/events', EventController::class);
Route::resource('/users', UserController::class);

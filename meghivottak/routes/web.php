<?php

use App\Http\Controllers\OrganisatorController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/organisators' , [OrganisatorController::class, 'index']);
Route::get('/organisators/{id}' , [OrganisatorController::class, 'show']);
Route::post('/organisators' , [OrganisatorController::class, 'store']);
Route::put('/organisators/{id}' , [OrganisatorController::class, 'update']);

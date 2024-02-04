<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CreativeController;

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

Route::get('/home',[CreativeController::Class, 'index']);
Route::get('/about',[CreativeController::Class, 'about']);
Route::get('/services',[CreativeController::Class, 'services']);
Route::get('/portfolio',[CreativeController::Class, 'portfolio']);
Route::get('/contact',[CreativeController::Class, 'contact']);
Route::post('/contact',[CreativeController::Class, 'contactForm']);

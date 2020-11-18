<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\woocomerController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// Route::get('/website', [App\Http\Controllers\woocomerController::class, 'index'])->name('website');

// Route::post('/w', [App\Http\Controllers\woocomerController::class, 'store'])->name('website');
// Route::get('/website/{{website}}/edit', [App\Http\Controllers\woocomerController::class, 'edit']);

Route::resource('website', 'App\Http\Controllers\woocomerController');

Route::resource('menu', 'App\Http\Controllers\menuController');
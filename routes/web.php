<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JabatanController;
use App\Http\Controllers\KaryawanController;

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

// Route::get('/', function () {
//     return view('home');
// });

// Route::get('/about', function () {
//     return view('about');
// });

// Route::get('/contact', function () {
//     return view('contact');
// });


Route::get('/test', [FrontController::class, "index"]);
Route::get('/', [HomeController::class, "index"]);
Route::get('/about', [AboutController::class, "index"]);
Route::get('/contact', [ContactController::class, "index"]);

Route::get('/crud', [KaryawanController::class, "index"]);
Route::get('/crud/search', [KaryawanController::class, 'search'])->name('karyawan.search');

Route::resource('jabatan', JabatanController::class);
Route::resource('karyawan', KaryawanController::class);
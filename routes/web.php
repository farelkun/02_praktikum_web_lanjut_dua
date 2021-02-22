<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProgramController;

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

/* Praktikum 1 */

// Route::get('/', function () {
//     return "Selamat Datang";
// });

// Route::get('/about', function () {
//     return "2041723016 - Farel Putra Hidayat";
// });

// Route::get('/articles/{id}', function ($id) {
//     return "Halaman Artikel
//     dengan ID " . $id;
// });

/* Praktikum 2 */

// Route::get('/', [HomeController::class, 'index']);

/* Praktikum 3 */

// Route::get('/home', [ProductController::class, 'home']);

// Route::prefix('products')->group(function () {
//     Route::get('/', [ProductController::class, 'marbel_edu_games']);
//     Route::get('/marbel_and_friends_kids_games', [ProductController::class, 'marbel_and_friends_kids_games']);
//     Route::get('/riri_story_books', [ProductController::class, 'riri_story_books']);
//     Route::get('/kolak_kids_songs', [ProductController::class, 'kolak_kids_songs']);
// });

// Route::get('/{param}', [NewsController::class, 'index']);

// Route::prefix('program')->group(function () {
//     Route::get('/karir', [ProgramController::class, 'karir']);
//     Route::get('/magang', [ProgramController::class, 'magang']);
//     Route::get('/kunjungan-industri', [ProgramController::class, 'kunjungan_industri']);
// });

// Route::get('/about', [NewsController::class, 'about']);

// Route::resource('contact', ContactController::class);
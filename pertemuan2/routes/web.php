<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\WelcomeController;

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

// Route::get('/', function () {
//     return 'Selamat Datang';
// });

// Route::get('/hello', function () {
//     return 'Hello World';
// });

// Route::get('/world', function () {
//     return 'World';
// });

// Route::get('/about', function () {
//     return 'Muhammad Iqbal Makmur Al-Muniri | 2241720099';
// });

// Route::get('/user/{name}', function ($name) {
//     return 'Nama saya ' . $name = 'Muhammad Iqbal Makmur';
// });

// Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) {
//     return 'Pos ke-' . $postId = 5 . " Komentar ke-: " . $commentId = 1;
// });

// Route::get('/articles/{id}', function ($id) {
//     return "Halaman Artikel dengan ID " . $id = 2;
// });

// Route::get('/user/{name?}', function ($name = null) {
//     return 'Nama saya ' . $name = "Muhammad Iqbal Makmur Al-Muniri";
// });

// Route::get('/user/{name?}', function ($name = 'John') {
//     return 'Nama saya ' . $name;
// });

// Route::get('/user/profile', function () {
//     // 
// })->name('profile');

Route::get(' /hello', [WelcomeController::class, 'hello']);

Route::get('/', [HomeController::class, 'index']);
Route::get('/about', [AboutController::class, 'about']);
Route::get('/articles/{id}', [ArticleController::class, 'articles']);
Route::resource('photos', PhotoController::class)->only(['index', 'show']);
// Route::get('/greeting', function () {
//     return view(
//         'hello',
//         ['name' => 'Muhammad Iqbal Makmur Al-Muniri']
//     );
// });

Route::get('/greeting', [WelcomeController::class,  'greeting']);

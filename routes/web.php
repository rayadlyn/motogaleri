<?php

use App\Http\Controllers\AlbumController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\UserController;

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

Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome');

Route::get('/register', function () {
    return view('auth.register');
})->name('register');
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

Route::get('/login', function () {
    return view('auth.login');
})->name('login');
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);

Route::resource('/posts', \App\Http\Controllers\PostController::class);

Route::post('/logout', [LogoutController::class, 'logout'])->name('logout');

Route::get('/profil', [ProfilController::class, 'show'])->name('profil');

Route::get('/profile', [UserController::class, 'show'])->name('profile');
Route::put('/profile/update', [UserController::class, 'update'])->name('profile.update');

Route::get('/album', [AlbumController::class, 'index'])->name('album');
Route::get('/albums', [AlbumController::class, 'index'])->name('albums.index');
Route::post('/albums', [AlbumController::class, 'store'])->name('albums.store'); // Menyimpan album baru
Route::delete('/albums/{id}', [AlbumController::class, 'destroy'])->name('albums.destroy');
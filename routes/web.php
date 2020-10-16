<?php

use App\Http\Controllers\FollowsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\ProfilesController;
use App\Mail\NewUserWelcomeMail;

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


Auth::routes();

Route::get('/email', function(){
    return new NewUserWelcomeMail();
});

Route::post('/follow/{user}', [FollowsController::class, 'store']);

Route::get('/', [PostsController::class, 'index'])->name('p.index');
Route::get('/p/create', [PostsController::class, 'create'])->name('p.create');
Route::post('/p', [PostsController::class, 'store'])->name('p.store');
Route::get('/p/{post}', [PostsController::class, 'show'])->name('p.show');

Route::get('/profile/{user}', [ProfilesController::class, 'index'])->name('profile.show');
Route::get('/profile/{user}/edit', [ProfilesController::class, 'edit'])->name('profile.edit');
Route::patch('/profile/{user}', [ProfilesController::class, 'update'])->name('profile.update');
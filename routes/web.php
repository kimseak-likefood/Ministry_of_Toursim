<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;

Route::get('/', function () { return view('home'); });

Route::middleware('guest')->group(function () {
    Route::get('/register', [UserController::class, 'showRegister'])->name('register');
    Route::post('/register', [UserController::class, 'register']);

    Route::get('/login', [UserController::class, 'showLogin'])->name('login');
    Route::post('/login', [UserController::class, 'login']);
});

Route::post('/logout', [UserController::class, 'logout'])->name('logout')->middleware('auth');



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth')->name('dashboard');

//for our header
Route::get('/phnompenh', function () { return view('pages.phnompenh'); });
Route::get('/siemreap', function () { return view('pages.siemreap'); });
Route::get('/mondulkiri', function () { return view('pages.mondulkiri'); });
Route::get('/kohkong', function () { return view('pages.kohkong'); });
Route::get('/kampot', function () { return view('pages.kampot'); });
Route::get('/battambang', function () { return view('pages.battambang'); });
Route::get('/activities', function () { return view('pages.activies'); });
Route::get('/holidays&events', function () { return view('pages.holidays&events'); });
Route::get('/laws&regulations', function () { return view('pages.laws&regulations'); });
Route::get('/statistics', function () { return view('pages.statistics'); });
Route::get('/tourism', function () { return view('pages.tourism'); });
Route::get('/blogposts', function () { return view('posts.blogposts'); });

//for posts
Route::get('/blogposts', [PostController::class, 'index'])->name('posts.blogposts');
Route::get('/blogposts/create', [PostController::class, 'create'])->name('posts.create'); // moved up
Route::get('/blogposts/{post}', [PostController::class, 'show'])->name('posts.viewposts');

Route::middleware('auth')->group(function () {
    Route::post('/blogposts', [PostController::class, 'store'])->name('posts.store');
    Route::get('/blogposts/{post}/edit', [PostController::class, 'edit'])->name('posts.edit');
    Route::put('/blogposts/{post}', [PostController::class, 'update'])->name('posts.update');
    Route::delete('/blogposts/{post}', [PostController::class, 'destroy'])->name('posts.destroy');
});

//for profile page
Route::get('/profile', function(){
    return view('profile');
});

Route::post('/updateAvatar', [UserController::class, 'updateAvatar']);

Route::post('/updateProfile', [UserController::class, 'updateProfile']);

Route::post('/deleteAccount', [UserController::class, 'deleteAccount']);
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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
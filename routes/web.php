<?php

use App\Http\Controllers\BoardController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
//    return view('welcome');
//});
//
//Route::get('/dashboard', function () {
//    return view('dashboard');
//})->middleware(['auth', 'verified'])->name('dashboard');
//
//Route::middleware('auth')->group(function () {
//    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
//});
//
//require __DIR__.'/auth.php';

Route::get('/registration', [UserController::class, 'registration'])->name('registration.registration');
Route::post('/registration', [UserController::class, 'create'])->name('registrate');

Route::get('/login', [UserController::class, 'login'])->name('login.login');
Route::post('/login', [UserController::class, 'checkLogin'])->name('login');

Route::controller(BoardController::class)->group(function () {
    Route::get('/board', [BoardController::class, 'boardInfo'])->name('board');
    Route::post('/board', [BoardController::class, 'editBoard'])->name('editBoard');
    Route::delete('/board/deleteBoard/{id}', [BoardController::class, 'deleteBoard'])->name('deleteBoard');
});

Route::post('/task/createTask', [MainController::class, 'createTask'])->name('createTask');
Route::get('/main', [MainController::class, 'userInfo'])->name('main');
Route::post('/main', [MainController::class, 'storeBoards'])->name('storeBor');

Route::get('/task', [MainController::class, 'editTask'])->name('editTask');

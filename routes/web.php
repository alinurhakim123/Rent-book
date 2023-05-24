<?php

use App\Http\Controllers\MessageController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Symfony\Component\TransLation\MessageCataLogue;

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

// Route FE
Route::get('/main', function () {
    return view('layouts.main');
});
Route::get('/dashboard', function () {
    return view('dashboard.index');
});
// Route::get('/user', function () {
//     return view('dashboard.user');
// });

Route::get('/book', function () {
    return view('dashboard.book');
});
Route::get('/category', function () {
    return view('dashboard.category');
});
Route::get('/rent-logs', function () {
    return view('dashboard.rent-logs');
});


Route::post('/', [MessageController::class, 'storeMessage'])->name('storeMessage');
// Register
Route::get('/register', [AuthController::class, 'indexRegister'])->name('register');
Route::post('/storeRegister', [AuthController::class, 'storeRegister'])->name('storeRegister');
// login
Route::get('/login', [AuthController::class,'indexLogin'])->name('login');
Route::post('/storeLogin', [AuthController::class, 'storeLogin'])->name('storeLogin');
// edit
Route::get('/edit/{id}', [AdminController::class, 'editUser'])->name('edit');
Route::post('/delete/{id}', [AdminController::class, 'deleteUser'])->name('delete');
Route::post('/update/{id}', [AdminController::class, 'update'])->name('updateindex');

//users
Route::get('/users', [AdminController::class, 'indexUser'])->name('user');
Route::get('/dashboard-user', [UserController::class, 'index']);

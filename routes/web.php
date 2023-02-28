<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DeleteController;
use App\Http\Controllers\UpdateController;

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
})->name('welcome');

Route::get('/home', [HomeController::class, 'home'])->name('home');

Route::post('/registerUser', [RegisterController::class, 'registerUser'])->name('registerUser');
Route::post('/deleteUser/{id}', [DeleteController::class, 'deleteUser'])->name('deleteUser');
Route::post('/updateUser', [UpdateController::class, 'updateUser'])->name('updateUser');
Route::post('/updateUser/{id}', [UpdateController::class, 'redirectEdit'])->name('redirectEdit');

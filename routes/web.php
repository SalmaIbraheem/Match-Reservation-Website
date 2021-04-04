<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MatchController;
use App\Http\Controllers\ReserveController;


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

    
Route::get('/',[App\Http\Controllers\MatchController::class, 'index']);

Auth::routes();
Route::get('/profile', [App\Http\Controllers\ProfileController::class, 'index'])->name('profile');
Route::delete('/profile/{id}', [App\Http\Controllers\ProfileController::class, 'delete'])->name('Rdelete');

Route::get('/users', [App\Http\Controllers\UsersController::class, 'index'])->name('users');
Route::post('/users/{id}', [App\Http\Controllers\UsersController::class, 'changetype'])->name('userType');
Route::delete('/users/{id}', [App\Http\Controllers\UsersController::class, 'delete'])->name('userDelete');

Route::get('/profile/edit', [App\Http\Controllers\EditController::class, 'index'])->name('editpage');
Route::post('/profile/edit', [App\Http\Controllers\EditController::class, 'edit'])->name('edit');


Route::get('/m/create',[App\Http\Controllers\MatchController::class, 'create']);
Route::get('/m',[App\Http\Controllers\MatchController::class, 'index']);
Route::get('/m/{id}',[App\Http\Controllers\MatchController::class, 'show'])->name('displayMatch');
Route::post('/m',[App\Http\Controllers\MatchController::class, 'store']);

Route::get('/s/create',[App\Http\Controllers\StadiumController::class, 'create']);
Route::post('/s',[App\Http\Controllers\StadiumController::class, 'store']);


Route::post('/reserve/{id}',[App\Http\Controllers\ReserveController::class, 'store'])->name('reserveSeat');
Route::get('/reserve',[App\Http\Controllers\ReserveController::class, 'getall'])->name('reservations');

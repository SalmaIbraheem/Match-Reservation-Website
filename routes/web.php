<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MatchController;


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

Auth::routes();
Route::get('/profile', [App\Http\Controllers\ProfileController::class, 'index'])->name('profile');
Route::POST('/profile/Rdelete/{id}', [App\Http\Controllers\ProfileController::class, 'delete'])->name('Rdelete');

Route::get('/profile/edit', [App\Http\Controllers\EditController::class, 'index'])->name('editpage');
Route::post('/profile/edit/{id}', [App\Http\Controllers\EditController::class, 'edit'])->name('edit');


Route::get('/m/create',[App\Http\Controllers\MatchController::class, 'create']);
Route::post('/m',[App\Http\Controllers\MatchController::class, 'store']);

Route::get('/s/create',[App\Http\Controllers\StadiumController::class, 'create']);
Route::post('/s',[App\Http\Controllers\StadiumController::class, 'store']);



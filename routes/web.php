<?php

use App\Http\Controllers\MarcaController;
use Illuminate\Support\Facades\Route;
use \Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;

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

Route::get('/datatable', function () {   
    // backend.students
    return view('users.index');
})->name('users');


Route::resource('users', UserController::class);



Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/marcas', function () {
    return view('app.marcas');
})->name('marcas')->middleware('auth');


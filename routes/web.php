<?php

use Illuminate\Support\Facades\Route;

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


Auth::routes();

Route::get('/admin', function () {
    return view('admin.index');
})->middleware(['auth','role:admin'])->name('admin.index');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



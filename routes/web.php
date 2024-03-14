<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\MyController as MyController;
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

Route::prefix('blog')->group(function () {
    Route::get('/mypost/{id?}', [Mycontroller::class, 'index'])->name('home');
    Route::get('/aboutus/{id?}', [Mycontroller::class, 'aboutUs'])->name('user.aboutUs');
    Route::get('/contact/{id?}', [Mycontroller::class, 'contactus'])->name('user.contactUs');
})->whereNumber('id');


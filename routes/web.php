<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

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
Route::get('contact', function () {
    return view('contact');
});
Route::get('', 'ContactController@showContact')->name('show-contact');
Route::get('', 'ContactController@sendContact')->name('send-message');
// Route::get('contact', [ContactController::class, 'showContact'])->name('contact');
// Route::get('/', [ContactController::class, 'home'])->name('home');
// Route::post('send-message', [ContactController::class, 'sendContact'])->name('send-message');

<?php

use App\Http\Controllers\MailController;
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
    return view('top');
})->name('top');

Route::get('/company', function () {
    return view('company');
})->name('company');

Route::get('/design', function () {
    return view('design');
})->name('design');
Route::get('/support', function () {
    return view('support');
})->name('support');
Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/policy', function () {
    return view('policy');
})->name('policy');

Route::post('/send-mail', MailController::class)->name('send-contact-mail');

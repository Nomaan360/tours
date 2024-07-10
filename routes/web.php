<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Usercontroller;
use App\Http\Controllers\Admincontroller;

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
    return view('index');
})->name('home');
Route::get('/about', function () {
    return view('about');
})->name('about');
Route::get('/booking', function () {
    return view('booking');
})->name('booking');
Route::get('/blog', function () {
    return view('blog');
})->name('blog');
Route::get('/contact', function () {
    return view('contact');
})->name('contact');
Route::get('/destination', function () {
    return view('destination');
})->name('destination');
Route::get('/gallery', function () {
    return view('gallery');
})->name('gallery');
Route::get('/guides', function () {
    return view('guides');
})->name('guides');
Route::get('/packages', function () {
    return view('packages');
})->name('packages');
Route::get('/services', function () {
    return view('services');
})->name('services');
Route::get('/testimonial', function () {
    return view('testimonial');
})->name('testimonial');
Route::get('/tour', function () {
    return view('tour');
})->name('tour');
Route::post('/sendmail', [Usercontroller::class, 'sendmail'])->name('sendmail');
Route::get('/adminlogin', [Admincontroller::class, 'adminlogin'])->name('adminlogin');

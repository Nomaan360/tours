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
Route::get('/packages', function () {
    return view('packages');
})->name('packages');
Route::get('/services', function () {
    return view('services');
})->name('services');

Route::get('/tour', function () {
    return view('tour');
})->name('tour');
Route::post('/sendmail', [Usercontroller::class, 'sendmail'])->name('sendmail');

Route::get('/adminlogin', [Admincontroller::class, 'adminlogin'])->name('adminlogin');

Route::get('/countries', [Admincontroller::class, 'countries'])->name('countries');
Route::get('/country_add', [Admincontroller::class, 'country_add'])->name('country_add');
Route::post('/country_store', [Admincontroller::class, 'country_store'])->name('country_store');
Route::get('/country_edit/{id}', [Admincontroller::class, 'country_edit'])->name('country_edit');
Route::get('/country_delete/{id}', [Admincontroller::class, 'country_delete'])->name('country_delete');
Route::post('/country_update', [Admincontroller::class, 'country_update'])->name('country_update');

Route::get('/admin_services', [Admincontroller::class, 'admin_services'])->name('admin_services');
Route::get('/service_add', [Admincontroller::class, 'service_add'])->name('service_add');
Route::post('/service_store', [Admincontroller::class, 'service_store'])->name('service_store');
Route::get('/service_edit/{id}', [Admincontroller::class, 'service_edit'])->name('service_edit');
Route::get('/service_delete/{id}', [Admincontroller::class, 'service_delete'])->name('service_delete');
Route::post('/service_update', [Admincontroller::class, 'service_update'])->name('service_update');

Route::get('/queries', [Admincontroller::class, 'queries'])->name('queries');
Route::get('/fetchdata', [Admincontroller::class, 'fetchdata'])->name('fetchdata');
Route::get('/readall', [Admincontroller::class, 'readall'])->name('readall');
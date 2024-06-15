<?php

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
// routes/web.php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/services', function () {
    return view('services');
})->name('services');

Route::get('/products', function () {
    return view('products');
})->name('products');

Route::post('/products', function () {
    return view('products');
})->name('products');



Route::get('/gallery', function () {
    return view('gallery');
})->name('gallery');

Route::get('/features', function () {
    return view('features');
})->name('features');

Route::get('/team', function () {
    return view('team');
})->name('team');

Route::get('/testimonial', function () {
    return view('testimonial');
})->name('testimonial');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/404', function () {
    return view('404');
})->name('404');

Route::get('/signup', function () {
    return view('auth.register');
})->name('signup');

Route::get('/signin', function () {
    return view('auth.login');
})->name('signin');

Route::get('/admin',function() {
    return view('admin.test');
})->name('dashboard');

Route::get('/create','ProductController@create')->name('admin.create');
Route::post('/products/store', 'ProductController@store')->name('products.store');

Route::post('/products/{product}', 'ProductController@destroy')->name('products.destroy');



Route::get('/admin/products','ProductController@index')->name('admin.products');


Route::get('/admin/products/{product}/edit','ProductController@edit')->name('admin.edit');

Route::post('/admin/products/{product}',  'ProductController@update')->name('admin.update');





Auth::routes();



Auth::routes();



// admin

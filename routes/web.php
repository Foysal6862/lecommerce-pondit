<?php

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

Route::get('/', 'Frontend\HomeController@index');

Route::get('/about', 'Frontend\AboutController@index');

Route::get('/care', 'Frontend\CareController@index');

Route::get('/codes', 'Frontend\CodeController@index');

Route::get('/contact', 'Frontend\ContactController@index');

Route::get('/faqs', 'Frontend\FaqController@index');

Route::get('/hold', 'Frontend\HoldController@index');

Route::get('/kitchen', 'Frontend\KitchenController@index');

Route::get('/offer', 'Frontend\OfferController@index');

Route::get('/shipping', function () {
    return view('e-commerce.shipping.shipping');
});

Route::get('/single', function () {
    return view('e-commerce.single.single');
});

Route::get('/terms', function () {
    return view('e-commerce.terms.terms');
});

Route::get('/wishlist', function () {
    return view('e-commerce.wishlist.wishlist');
});

// login and registation

Route::get('/register', 'Frontend\RegisterController@index');

Route::get('/login', 'Frontend\LoginController@index');
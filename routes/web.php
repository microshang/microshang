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

Route::get('/phpinfo', function () {
    return view('welcome');
});


# ------------------ Page Route ------------------------
Route::get('/', 'PagesController@home')->name('home');
Route::get('/about', 'PagesController@about')->name('about');
Route::get('/search', 'PagesController@search')->name('search');
Route::get('/sitemap', 'PagesController@sitemap');
Route::get('/sitemap.xml', 'PagesController@sitemap');

# ------------------ Product Route ------------------------
Route::get('/product/{id}', 'ProductController@show')->name('product.show');

# ------------------ Categories ------------------------
Route::get('categories/{id}', 'CategoriesController@show')->name('categories.show');

# ------------------ Flow ------------------------
Route::get('cart', 'FlowController@show')->name('cart.show');

# ------------------ Authentication ------------------------
Route::get('/login', 'Auth\AuthController@oauth')->name('login');
Route::get('/auth/login', 'Auth\AuthController@signin')->name('auth.login');
Route::post('/auth/login', 'Auth\AuthController@postLogin')->name('auth.login');
Route::get('/login-required', 'Auth\AuthController@loginRequired')->name('login-required');
Route::get('/admin-required', 'Auth\AuthController@adminRequired')->name('admin-required');
Route::get('/user-banned', 'Auth\AuthController@userBanned')->name('user-banned');
Route::get('/signup', 'Auth\AuthController@create')->name('signup');
Route::post('/signup', 'Auth\AuthController@createNewUser')->name('signup');
Route::get('/logout', 'Auth\AuthController@logout')->name('logout');
Route::get('/oauth', 'Auth\AuthController@getOauth');

# ------------------ Admin Route ------------------------
Route::get('/admin/{vue_capture?}', 'Admin\IndexController@index')->where('vue_capture', '[\/\w\.-]*');

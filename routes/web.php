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

# ------------------ Admin Route ------------------------
Route::get('/admin/{vue_capture?}', 'Admin\IndexController@index')->where('vue_capture', '[\/\w\.-]*');

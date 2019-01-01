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

Route::get('/main_stores/create_item_type_master', function () {
    return view('main_stores.create_item_type_master');
});
Route::get('/main_stores/create_item_sub_type_master', function () {
    return view('main_stores.create_item_sub_type_master');
});
Route::get('/main_stores/create_item_master', function () {
    return view('main_stores.create_item_master');
});

Route::get('/main_stores/opening_stock', function () {
    return view('main_stores.opening_stock');
});

Route::get('/main_stores/annual_indent', function () {
    return view('main_stores.annual_indent');
});

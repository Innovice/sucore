<?php

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
Route::get('/main_stores/annual_indent_item_desc', function () {
    return view('main_stores.annual_indent_item_desc');
});

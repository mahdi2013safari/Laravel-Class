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

use App\Http\Controllers\MahdiController;

Route::get('/', function () {
    return view('webpage');
});


/**
 * show the main admin page
 */
Route::get('/admin',function(){
    return view('admin.layout_admin.master');
});

//Route::resource('/admin/new', MahdiController);

Route::resource('/admin/safari','SafariController');

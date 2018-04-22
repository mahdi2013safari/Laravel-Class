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

Route::get('/', function () {
    return view('webpage');
});


/**
 * show the main admin page
 */
Route::get('/admin',function(){
    return view('admin.layout_admin.master');
});

Route::get('/admin/new_job', function(){
   return view('admin.content_admin.new_job');
});


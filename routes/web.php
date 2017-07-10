<?php

use App\Events\FileAdded;
use App\Models\Filename;

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

Route::get('/addedfile', 'FileController@checkAddedFile');
Route::get('/', function(){
    return view('welcome');
});


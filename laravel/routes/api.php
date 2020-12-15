<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group(['prefix' => '/v1', 'namespace' => 'Api', 'as' => 'api.'], function () {
    Route::resource('authors', 'AuthorController', ['except' => ['create', 'edit']]);
    Route::get('/books/list', 'BookController@getList')->name('books.list');
    Route::resource('books', 'BookController', ['except' => ['create', 'edit']]);
});

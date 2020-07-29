<?php

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

Route::group([

    'middleware' => 'api',
    'prefix' => 'auth'

], function ($router) {

    Route::post('login', 'AuthController@login');
    Route::post('logout', 'AuthController@logout');
    Route::post('refresh', 'AuthController@refresh');
    Route::get('me', 'AuthController@me');

});

/*
|--------------------------------------------------------------------------
| User Routes
|--------------------------------------------------------------------------
*/

Route::get('users', 'UserController@all');
Route::post('users', 'UserController@create');
Route::get('users/{id}', 'UserController@getById');
Route::get('users/email/{email}', 'UserController@getByEmail');
Route::get('users/username/{username}', 'UserController@getByUsername');

/*
|--------------------------------------------------------------------------
| Board Routes
|--------------------------------------------------------------------------
*/
Route::get('boards', 'BoardController@all');
Route::get('boards/{id}', 'BoardController@getById');
Route::get('boards/user/{userId}', 'BoardController@getByUser');
Route::post('boards', 'BoardController@create');

/*
|--------------------------------------------------------------------------
| Pin Routes
|--------------------------------------------------------------------------
*/
Route::get('pins', 'PinController@all');
Route::get('pins/{id}', 'PinController@getById');
Route::get('pins/board/{boardId}', 'PinController@GetByBoard');
Route::post('pins', 'PinController@create');

/*
|--------------------------------------------------------------------------
| Tag Routes
|--------------------------------------------------------------------------
*/
Route::get('tags', 'TagController@all');
Route::post('pins', 'TagController@create');

/*
|--------------------------------------------------------------------------
| Generic Routes
|--------------------------------------------------------------------------
*/
Route::get('search/{query}', 'PinController@search');

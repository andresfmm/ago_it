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

Route::get('/', [
    'uses' => 'HomeController@index',
    'as' => '/login'
]);

Route::group(['middleware' => 'auth'], function () {
	Route::get('list','PostController@getPosts');
	Route::post('create_compani','CreateCompani@create');
	Route::get('del/{id}','PostController@deletecompanie');
	Route::get('update/{id}', 'updatecompanie@update' );
	Route::post('edit/{id}','companiupdate@edit');

    //    Route::get('/link1', function ()    {
//        // Uses Auth Middleware
//    });

    //Please do not remove this if you want adminlte:route and adminlte:link commands to works correctly.
    #adminlte_routes
});

<?php
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get( '/', [ 'uses' => 'Admin\IndexController@show', 'as' => 'home' ] );
Route::get( '/about', [ 'uses' => 'Admin\AboutController@show', 'as' => 'about' ] );
Route::get( '/article/{id}', [ 'uses' => 'Admin\Core@getArticle' , 'as' => 'article' ] );
Route::get( '/articles', [ 'uses' => 'Admin\Core@getArticles', 'as' => 'articles'] );
Route::match(['get', 'post'], '/contacts', [ 'uses' => 'Admin\ContactController@show', 'as' => 'contacts' ] );
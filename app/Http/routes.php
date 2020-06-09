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

Route::get('/', ['as' => 'home' , function () {
    return view('welcome');
}]);
//Route::get( '/page', function () {
//	echo '<pre>';
//	print_r($_ENV);
//	echo '</pre>';

//	Config::set( 'app.locale', 'ru' );
//	echo Config::get('app.locale');
//
//	return;
//} );

//Route::post('/comments', function(){
//	echo '<pre>';
//	var_dump($_POST);
//	echo '</pre>';
//});
//Route::match(['get', 'post'], '/comments', function () {
//	echo '<pre>';
//	var_dump( $_POST );
//	echo '</pre>';
//} );
//Route::any( '/comments', function () {
//	echo '<pre>';
//	var_dump( $_POST );
//	echo '</pre>';
//} );
//Route::get( '/page/{id?}', function ($id = 100) {
//	var_dump($id);
//} );
//Route::get( '/page/{id?}', function ( $id = 100 ) {
//	var_dump( $id );
//} );

Route::group(['prefix'=>'admin'], function(){
	Route::get('page/create', function(){
		echo 'page/create';
		echo '<br><a href="'.route('home').'">Home</a>';
	});
	Route::get( 'page/edit', function () {
		echo 'page/edit';
		echo '<br><a href="' . route( 'home' ) . '">Home</a>';
	} );
});

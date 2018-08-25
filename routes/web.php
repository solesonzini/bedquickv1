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
    return view('welcome');
    //return	view('home',	array('nombre'	=>	'Javi'));
});
Route::get('auth/login', function () {
    //return view('welcome');
    return	view('auth.login');
});
Route::get('auth/logout', function () {
    //return view('welcome');
    return	view('auth.logout');
});

Route::get('blanco', function () {
    //return view('welcome');
    return	view('blanco.index');
});
Route::get('blanco/show/{id}', function($blanco_id)
{
						$blanco_id	=	87;
				return	view('blanco.show',	array('id'	=>	$blanco_id));

})
->where('id',	'[0-9]+');

Route::get('blanco/create', function () {
    //return view('welcome');
    return	view('blanco.create');
});
Route::get('blanco/edit/{id}', function($blanco_id)
{
				$blanco_id	=	89;
    				return	view('blanco.edit',	array('id'	=>	$blanco_id));

})
->where('id',	'[0-9]+');

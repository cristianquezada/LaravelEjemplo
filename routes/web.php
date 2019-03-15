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

/*
GET,POST,PUT,DELETE,RESOURCE

*/

Route::get('/', function () {
    return view('welcome');
});
/*
 Route::get('articulos/{nombre?}',function($nombre="No hay nombre"){

echo "El nombre que colocaste es:".$nombre;
 });

 */


 Route::group(['prefix'=>'articulos'],function(){

Route::get('view/{id}',['uses'=>'TestController@view','as'=>'articulosView']);
 });
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

Route::get('/', function () {
    return view('welcome');
});


Route::get('welcome', function () {                   //ejemplo de ruta
    return "hola mundo";
});


Route::any('welcome', function () {                  //cualquien peticion http(post, get, delete, etc) la procesa con any
    $url = url("welcome");
    return "estamos en $url";

});

//Route de forma individual para distintas peticiones Http

/*Route::get('welcome', function () {


    return "Hello World!";

});

Route::post('welcome', function () {


    return "Hello World!";

});

Route::match(['get', 'post'], 'match', function () {


    return "Matches GET and POST";

});*/






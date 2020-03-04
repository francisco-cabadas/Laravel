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

Route::pattern('hex', '[a-z0-9]+' );           //declara que solo podrá tener en la url caracteres hexadecimales abajo vemos como se usa

Route::get('welcome/{hex?}', function ($hex = null) {                   //ejemplo de ruta (no funciona por que hay otro metodo igual con any
    return "hola mundo";
});

Route::pattern('num', '\d+');                 //solo permite numeros, se utiliza abajo

Route::get('numero/{num?}', function ($num = null) {       //al poner esta url solo puedo poner numeros
    return "hola mundo $num";
});



Route::get('post/id/{id}/nombre/{nombre}', function ($id, $nombre) {                   //ejemplo de ruta con parametros
    return "hola mundo  $id  $nombre";
});

Route::get('post/id/{id}/nombre/{nombre?}', function ($id, $nombre = null) {                   //ejemplo de ruta con parametros optativos
    if($nombre == null){
        return "id no especificado, mostrariamos todos los ids, (por ejemplo)";
    }
    return "hola mundo  $id  $nombre";
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






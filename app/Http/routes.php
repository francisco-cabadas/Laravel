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

/*Route::get('/', function () {
    return view('welcome');
});
*/

/*Route::pattern('hex', '[a-z0-9]+' );           //declara que solo podrá tener en la url caracteres hexadecimales abajo vemos como se usa

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

Route::get('perfil/{perfil?}', ['as' => 'perfil' , function ($perfil = null) {   //creando enlaces del directorio
    $url = route("perfil", ['perfil' => $perfil]);
    if ($perfil == null) {
        return "no se seleccinó un perfil en concreto";
    }
    return "hola usuario $perfil y el directorio completo es $url";
}]);


//grupos de Routes
Route::group(['prefix' => 'user'], function () {          //se utiliza para tener mejor estructurado el código

    Route::get('/', function ()
    {

        return '/user';
    });

    Route::get('profile', function () {

        return 'user/profile';
    });
});

*/
//----------------------------------comienza proyecto--------------------------------------------------------------------------

Route::get('post/{id}', [

    'uses' => 'PostController@show'

]);

Route::get('/' , 'PostController@index');  // mostrará en index del PostContoller

Route::post('post/store', ['middleware' => 'auth', function () {    //array de middleware  ['middleware' => ['auth', 'age']

}]);


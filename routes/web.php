<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return 'Primeira API REST com Lumen... ' . $router->app->version();
});

$router->group(['prefix' => 'courses'], function() use($router){

    $router->get('/', 'CourseController@index');
    $router->get('/{course}', 'CourseController@show');

    $router->post('/','CourseController@store');
    $router->put('/{course}', 'CourseController@update');
    $router->delete('/{course}', 'CourseController@destroy');

    /*
        Recurso: Curso (Course)
        Endpoint: /courses (cursos)
        GET, POST, PUT/PATCH, DELETE
    */

});

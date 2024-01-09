<?php

/** @var \Laravel\Lumen\Routing\Router $router */

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
    return $router->app->version();
});


// Tareas
$router->get('/tareas', 'TareaController@index');
$router->post('/tareas', 'TareaController@store');
$router->get('/tareas/{id}', 'TareaController@show');
$router->put('/tareas/{id}', 'TareaController@update');
$router->delete('/tareas/{id}', 'TareaController@destroy');

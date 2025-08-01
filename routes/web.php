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
$router->group(['prefix' => 'api/perpustakaan'], function () use ($router) {
    $router->get('/', 'PerpustakaanController@index');
    $router->post('/', 'PerpustakaanController@store');
    $router->get('{id}', 'PerpustakaanController@show');
    $router->put('{id}', 'PerpustakaanController@update');
    $router->delete('{id}', 'PerpustakaanController@destroy');
});


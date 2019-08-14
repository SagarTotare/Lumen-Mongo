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

// $router->get('/', function () use ($router) {
//     return $router->app->version();
// });

$router->get('/', 'UserController@index');

$router->group(['prefix' => 'user'], function ($router) {
    $router->get('', 'UserController@index');
    $router->post('add', 'UserController@store');
    $router->get('{id}', 'UserController@edit');
    $router->put('edit/{id}', 'UserController@update');
    $router->delete('delete/{id}', 'UserController@destroy');
});

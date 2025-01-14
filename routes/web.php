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

$router->post('/book','BookController@create');
$router->get('/book','BookController@index');
$router->get('/book/{id}','BookController@show');
$router->put('/book/{id}','BookController@update');
$router->delete('/book/{id}','BookController@destroy');

$router->post('/register','UserController@register');
$router->post('/login','UserController@login');

$router->get('/', function () use ($router) {
    return $router->app->version();

});



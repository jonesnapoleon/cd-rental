<?php

use Illuminate\Http\Request;

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

$router->get('/', function () {
    return "<a href='/cd'>Go to CD list</a>";
});

$router->group(['prefix' => 'cd'], function () use ($router) {
    $router->get('/', 'CDController@showAll');
    $router->get('/{id}', 'CDController@get');
    $router->post('/', 'CDController@store');
    $router->put('/{id}', 'CDController@update');
    $router->delete('/', 'CDController@delete');
});
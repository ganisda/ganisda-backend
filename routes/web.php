<?php

/** @var \Laravel\Lumen\Routing\Router $router */

use Carbon\Carbon;

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


$router->group(['prefix' => '/auth'], function () use ($router) {
    $router->get("/redir/{provider}", ["uses"=> 'AuthController@redirect']);
    $router->get("/callback/{provider}", ["uses"=> 'AuthController@callback']);
});
<?php

use Illuminate\Support\Str;

//MVC El controlador se encarga de la comunicacion entre modelos y vistas


$router->get('/', function () use ($router) {
    //return $router->app->version();
   return 'This is my test with Lumen';
});

$router->get('/key', function (){
    return Str::random(32);
});

$router->get('/users', ['uses' => 'UsersController@index']);
$router->post('/users', ['uses' => 'UsersController@createUser']);

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
    return $router -> app -> version();
});

//persona
$router->post('/person', ['uses' => 'PersonController@createPerson']);
$router->put('/person', ['uses' => 'PersonController@updatePerson']);
$router->get('/person', ['uses' => 'PersonController@index']);


//reserve
$router->post('/reserve', ['uses' => 'ReserveController@createReserva']);
$router->put('/reserve', ['uses' => 'ReserveController@updateReserva']);
$router->delete('/reserve', ['uses' => 'ReserveController@destroyReserva']);
$router->get('/reserve', ['uses' => 'ReserveController@index']);


//destination
$router->post('/destination', ['uses' => 'DestinationController@createDestination']);
$router->put('/destination', ['uses' => 'DestinationController@updateDestination']);
$router->delete('/destination', ['uses' => 'DestinationController@destroyDestination']);
$router->get('/destination', ['uses' => 'DestinationController@index']);


//bus
$router->post('/bus', ['uses' => 'BusController@createBus']);
$router->put('/bus', ['uses' => 'BusController@updateBus']);
$router->delete('/bus', ['uses' => 'BusController@destroyBus']);
$router->get('/bus', ['uses' => 'BusController@index']);


//reserveDetail
$router->post('/reserveDetail', ['uses' => 'ReserveDetailController@createReserveDetail']);
$router->put('/reserveDetail', ['uses' => 'ReserveDetailController@updateReserveDetail']);
$router->delete('/reserveDetail', ['uses' => 'ReserveDetailController@destroyReserveDetail']);
$router->get('/reserveDetail', ['uses' => 'ReserveDetailController@index']);


//seat
$router->post('/seat', ['uses' => 'SeatController@createSeat']);
$router->put('/seat', ['uses' => 'SeatController@updateSeat']);
$router->delete('/seat', ['uses' => 'SeatController@destroySeat']);
$router->get('/seat', ['uses' => 'SeatController@index']);


//travel
$router->post('/travel', ['uses' => 'TravelController@createTravel']);
$router->put('/travel', ['uses' => 'TravelController@updateTravel']);
$router->delete('/travel', ['uses' => 'TravelController@destroyTravel']);
$router->get('/travel', ['uses' => 'TravelController@index']);
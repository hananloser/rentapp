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

use Illuminate\Http\Request;
//View Route 
$router->get('/', function () {
    return view('welcome');
});

// APi ROUTE 
$router->group(['prefix' => 'api', 'middleware' => 'auth'], function ($router) {
    $router->get('owner', 'OwnerController@index');
    $router->post('owner', 'OwnerController@store');
    $router->get('owner/{owner_id}', 'OwnerController@show');
    $router->put('owner/{owner_id}', 'OwnerController@update');
});


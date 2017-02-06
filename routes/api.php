<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

$api = app('Dingo\Api\Routing\Router');
$api->version('v1', function($api)
{
    $api->group(['namespace'=>'App\Http\Controllers'], function($api)
    {
        $api->post('/auth/register', 'Auth\AuthController@register');
        $api->post('/auth/login', 'Auth\AuthController@login');
        $api->get('/auth/activate', 'Auth\AuthController@activate');
    });
});
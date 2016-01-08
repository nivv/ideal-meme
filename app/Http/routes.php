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

$app->get('articles/{id}', [
    'as' => 'articles', 'uses' => 'ArticlesController@show'
]);

$app->get('articles', [
    'as' => 'articles', 'uses' => 'ArticlesController@index'
]);

$app->get('info', [
    'as' => 'info', 'uses' => 'ArticlesController@info'
]);
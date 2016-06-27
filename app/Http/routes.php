<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'WelcomeController@index');
Route::get('home', 'HomeController@index');

//Teams routes
Route::get('teams',['as' => 'teams', 'uses' => 'TeamController@index']);
Route::get('team',['as' => 'team_create', 'uses' => 'TeamController@create']);
Route::post('team',['as' => 'team_store', 'uses' => 'TeamController@store']);
Route::get('team/{team}/destroy',['as' => 'team_destroy', 'uses' => 'TeamController@destroy'])->where(array('id' => '[0-9]+'));
Route::get('team/{team}/edit',['as' => 'team_edit', 'uses' => 'TeamController@edit']);
Route::get('team/{team}/show',['as' => 'team_show', 'uses' => 'TeamController@show']);
Route::post('team/{team}/update',['as' => 'team_update', 'uses' => 'TeamController@update']);
Route::get('team/{team}/getUsers',['as' => 'team_users', 'uses' => 'TeamController@getTeamUsers']);
Route::get('team/addUserToTeam',['as' => 'addUserToTeam', 'uses' => 'TeamController@addUserToTeam']);
Route::get('team/removeUserFormTeam',['as' => 'removeUserFormTeam', 'uses' => 'TeamController@removeUserFormTeam']);

Route::controllers(['auth' => 'Auth\AuthController','password' => 'Auth\PasswordController',]);

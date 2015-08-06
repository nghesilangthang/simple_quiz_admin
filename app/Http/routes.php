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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'home'], function(){
    Route::get('/', [
        'as' => 'home.index',
        'uses' => 'HomeController@index'
    ]);
});

Route::group(['prefix' => 'user'], function(){
    Route::get('/',[
        'as' => 'user.index',
        'uses' => 'UserController@index'
    ]);

    Route::get('/create',[
        'as' => 'user.create',
        'uses' => 'Usercontroller@create'
    ]);

    Route::get('/edit/{id}',[
        'as' => 'user.edit',
        'uses' => 'Usercontroller@edit'
    ]);
});


Route::group(['prefix' => 'question'], function(){
    Route::get('/', [
        'as' => 'question.index',
        'uses' => 'QuestionController@index'
    ]);

    Route::get('/create', [
        'as' => 'question.create',
        'uses' => 'QuestionController@create'
    ]);

    Route::get('/edit/{id}',[
        'as' => 'question.edit',
        'uses' => 'QuestionController@edit'
    ]);
});




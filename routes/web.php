<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('about', 'PageController@about');
Route::get('contact', 'PageController@contact');

Route::post('questions/store', 'QuestionController@store');
Route::get('questions/create', 'QuestionController@create');
Route::get('questions/{question}', 'QuestionController@show');
Route::get('questions', 'QuestionController@index');
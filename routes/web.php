<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('about', 'PageController@about');

Route::get('contact', 'PageController@contact');
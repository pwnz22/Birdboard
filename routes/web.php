<?php

Route::get('/projects', 'ProjectsController@index');
Route::get('/projects/{project}', 'ProjectsController@show');
Route::post('/projects', 'ProjectsController@store')->middleware('auth');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

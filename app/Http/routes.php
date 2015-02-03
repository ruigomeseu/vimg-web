<?php


Route::get('/', ['as' => 'index', 'uses' => 'ImagesController@index']);

Route::post('/images', 'ImagesController@store');

Route::get('{hashId}', ['as' => 'images.show', 'uses' => 'ImagesController@show']);
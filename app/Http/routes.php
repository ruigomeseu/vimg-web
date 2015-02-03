<?php

Route::get('/', ['as' => 'index', 'uses' => 'ImagesController@index']);

Route::post('images', ['as' => 'images.upload', 'uses' => 'ImagesController@store']);

Route::get('{hashId}', ['as' => 'images.show', 'uses' => 'ImagesController@show']);
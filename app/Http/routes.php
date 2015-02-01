<?php

Route::post('/images', 'ImagesController@store');

Route::get('{hashId}', ['as' => 'images.show', 'uses' => 'ImagesController@show']);
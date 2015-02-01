<?php


Route::get('/', function () {
    echo 'vimg.co is best host confirmed by cmat confirmer';
});

Route::post('/images', 'ImagesController@store');

Route::get('{hashId}', ['as' => 'images.show', 'uses' => 'ImagesController@show']);
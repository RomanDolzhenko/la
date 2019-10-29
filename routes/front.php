<?php

Route::group([ 'namespace' => 'Front' ], function () {

    Route::get('/', function () {
        return view('welcome');
    });

    Route::get('/gg', function () {
        ddd(11);
    });

});
<?php

Route::group([ 'namespace' => 'Panel' ], function () {

    Route::get('/', function () {
        return view('welcome');
    });

});
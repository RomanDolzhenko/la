<?php

Route::group([ 'prefix' => '/', 'namespace' => 'Panel' ], function () {
    Route::get('/', 'PanelController@index');

});
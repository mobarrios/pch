<?php

Route::group(['prefix'=> 'reportes'], function(){

    Route::get('index', [
        'as' => 'reportes.index',
        'uses' => 'ReportesController@index'
    ]);


});

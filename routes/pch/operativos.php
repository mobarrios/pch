<?php

Route::group(['prefix'=> 'operativo'], function(){

    Route::get('index', [
        'as' => 'programa.operativo.index',
        'uses' => 'OperativoController@index'
    ]);

    Route::get('create', [
        'as' => 'programa.operativo.create',
        'uses' => 'OperativoController@create'
    ]);

    Route::post('store', [
        'as' => 'programa.operativo.store',
        'uses' => 'OperativoController@store'
    ]);
    
    Route::group(['prefix' => '{operativo_id?}'], function() {

        Route::get('edit', [
            'as' => 'programa.operativo.edit',
            'uses' => 'OperativoController@edit'
        ]);

        Route::post('udpate', [
            'as' => 'programa.operativo.update',
            'uses' => 'OperativoController@update'
        ]);

        Route::get('destroy', [
            'as' => 'programa.operativo.destroy',
            'uses' => 'OperativoController@destroy'
        ]);

        

    });
});
<?php


    Route::group(['prefix'=> 'estado_civil'], function(){

        Route::get('index', [
            'as' => 'estado_civil.index',
            'uses' => 'EstadoCivilController@index'
        ]);

        Route::get('create', [
            'as' => 'estado_civil.create',
            'uses' => 'EstadoCivilController@create'
        ]);

        Route::post('store', [
            'as' => 'estado_civil.store',
            'uses' => 'EstadoCivilController@store'
        ]);
        
        Route::group(['prefix' => '{id?}'], function() {

            Route::get('edit', [
                'as' => 'estado_civil.edit',
                'uses' => 'EstadoCivilController@edit'
            ]);

            Route::post('udpate', [
                'as' => 'estado_civil.update',
                'uses' => 'EstadoCivilController@update'
            ]);

            Route::get('destroy', [
                'as' => 'estado_civil.destroy',
                'uses' => 'EstadoCivilController@destroy'
            ]);
        });
    });

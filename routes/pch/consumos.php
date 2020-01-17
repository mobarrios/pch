<?php


    Route::group(['prefix'=> 'consumo'], function(){

        Route::get('index', [
            'as' => 'consumo.index',
            'uses' => 'ConsumoController@index'
        ]);

        Route::get('create', [
            'as' => 'consumo.create',
            'uses' => 'ConsumoController@create'
        ]);

        Route::post('store', [
            'as' => 'consumo.store',
            'uses' => 'ConsumoController@store'
        ]);
        
        Route::group(['prefix' => '{id?}'], function() {

            Route::get('edit', [
                'as' => 'consumo.edit',
                'uses' => 'ConsumoController@edit'
            ]);

            Route::post('udpate', [
                'as' => 'consumo.update',
                'uses' => 'ConsumoController@update'
            ]);

            Route::get('destroy', [
                'as' => 'consumo.destroy',
                'uses' => 'ConsumoController@destroy'
            ]);
        });
    });

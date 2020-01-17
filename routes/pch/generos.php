<?php


    Route::group(['prefix'=> 'genero'], function(){

        Route::get('index', [
            'as' => 'genero.index',
            'uses' => 'GeneroController@index'
        ]);

        Route::get('create', [
            'as' => 'genero.create',
            'uses' => 'GeneroController@create'
        ]);

        Route::post('store', [
            'as' => 'genero.store',
            'uses' => 'GeneroController@store'
        ]);
        
        Route::group(['prefix' => '{id?}'], function() {

            Route::get('edit', [
                'as' => 'genero.edit',
                'uses' => 'GeneroController@edit'
            ]);

            Route::post('udpate', [
                'as' => 'genero.update',
                'uses' => 'GeneroController@update'
            ]);

            Route::get('destroy', [
                'as' => 'genero.destroy',
                'uses' => 'GeneroController@destroy'
            ]);
        });
    });

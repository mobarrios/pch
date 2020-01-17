<?php


    Route::group(['prefix'=> 'programa'], function(){

        Route::get('index', [
            'as' => 'programa.index',
            'uses' => 'ProgramaController@index'
        ]);

        Route::get('create', [
            'as' => 'programa.create',
            'uses' => 'ProgramaController@create'
        ]);

        Route::post('store', [
            'as' => 'programa.store',
            'uses' => 'ProgramaController@store'
        ]);
        
        Route::group(['prefix' => '{id?}'], function() {

            Route::get('edit', [
                'as' => 'programa.edit',
                'uses' => 'ProgramaController@edit'
            ]);

            Route::post('udpate', [
                'as' => 'programa.update',
                'uses' => 'ProgramaController@update'
            ]);

            Route::get('destroy', [
                'as' => 'programa.destroy',
                'uses' => 'ProgramaController@destroy'
            ]);

            require(__DIR__ .'/operativos.php');
            
        });
    });

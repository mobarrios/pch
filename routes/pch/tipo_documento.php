<?php


    Route::group(['prefix'=> 'tipo_documento'], function(){

        Route::get('index', [
            'as' => 'tipo_documento.index',
            'uses' => 'TipoDocumentoController@index'
        ]);

        Route::get('create', [
            'as' => 'tipo_documento.create',
            'uses' => 'TipoDocumentoController@create'
        ]);

        Route::post('store', [
            'as' => 'tipo_documento.store',
            'uses' => 'TipoDocumentoController@store'
        ]);
        
        Route::group(['prefix' => '{id?}'], function() {

            Route::get('edit', [
                'as' => 'tipo_documento.edit',
                'uses' => 'TipoDocumentoController@edit'
            ]);

            Route::post('udpate', [
                'as' => 'tipo_documento.update',
                'uses' => 'TipoDocumentoController@update'
            ]);

            Route::get('destroy', [
                'as' => 'tipo_documento.destroy',
                'uses' => 'TipoDocumentoController@destroy'
            ]);
        });
    });

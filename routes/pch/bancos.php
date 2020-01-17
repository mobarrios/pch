<?php


    Route::group(['prefix'=> 'banco'], function(){

        Route::get('index', [
            'as' => 'banco.index',
            'uses' => 'BancoController@index'
        ]);

        Route::get('create', [
            'as' => 'banco.create',
            'uses' => 'BancoController@create'
        ]);

        Route::post('store', [
            'as' => 'banco.store',
            'uses' => 'BancoController@store'
        ]);
        
        Route::group(['prefix' => '{id?}'], function() {

            Route::get('edit', [
                'as' => 'banco.edit',
                'uses' => 'BancoController@edit'
            ]);

            Route::post('udpate', [
                'as' => 'banco.update',
                'uses' => 'BancoController@update'
            ]);

            Route::get('destroy', [
                'as' => 'banco.destroy',
                'uses' => 'BancoController@destroy'
            ]);


            Route::group(['prefix'=> 'sucursal'], function(){

                Route::get('index', [
                    'as' => 'banco.sucursal.index',
                    'uses' => 'SucursalController@index'
                ]);
        
                Route::get('create', [
                    'as' => 'banco.sucursal.create',
                    'uses' => 'SucursalController@create'
                ]);
        
                Route::post('store', [
                    'as' => 'banco.sucursal.store',
                    'uses' => 'SucursalController@store'
                ]);
                
                Route::group(['prefix' => '{sucursal_id?}'], function() {
        
                    Route::get('edit', [
                        'as' => 'banco.sucursal.edit',
                        'uses' => 'SucursalController@edit'
                    ]);
        
                    Route::post('udpate', [
                        'as' => 'banco.sucursal.update',
                        'uses' => 'SucursalController@update'
                    ]);
        
                    Route::get('destroy', [
                        'as' => 'banco.sucursal.destroy',
                        'uses' => 'SucursalController@destroy'
                    ]);
                });
            });


        });
    });

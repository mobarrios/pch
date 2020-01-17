<?php


Route::group(['prefix'=> 'persona'], function(){

    Route::get('index', [
        'as' => 'persona.index',
        'uses' => 'PersonaController@index'
    ]);

    Route::get('create', [
        'as' => 'persona.create',
        'uses' => 'PersonaController@create'
    ]);

    Route::post('store', [
        'as' => 'persona.store',
        'uses' => 'PersonaController@store'
    ]);

    // Route::get('buscar', [
    //     'as' => 'persona.buscar',
    //     'uses' => 'PersonaController@buscar'
    // ]);

    // Route::post('buscar', [
    //     'as' => 'persona.buscarPost',
    //     'uses' => 'PersonaController@buscarPost'
    // ]);

    Route::group(['prefix' => '{id?}'], function() {

        Route::get('edit', [
            'as' => 'persona.edit',
            'uses' => 'PersonaController@edit'
        ]);

        Route::get('show', [
            'as' => 'persona.show',
            'uses' => 'PersonaController@show'
        ]);

        Route::post('udpate', [
            'as' => 'persona.update',
            'uses' => 'PersonaController@update'
        ]);

        Route::get('destroy', [
            'as' => 'persona.destroy',
            'uses' => 'UsersController@destroy'
        ]);
    });
});
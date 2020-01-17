<?php



Route::group(['middleware'=> 'auth'], function(){


    // PROFILES Users

    Route::group(['prefix'=> 'users'], function(){

        Route::get('index', [
            'as' => 'configs.users.index',
            'uses' => 'Configs\UsersController@index'
        ]);

        Route::get('create', [
            'as' => 'configs.users.create',
            'uses' => 'Configs\UsersController@create'
        ]);

        Route::post('store', [
            'as' => 'configs.users.store',
            'uses' => 'Configs\UsersController@store'
        ]);

        Route::group(['prefix' => '{id?}'], function() {

            Route::get('edit', [
                'as' => 'configs.users.edit',
                'uses' => 'Configs\UsersController@edit'
            ]);

            Route::post('udpate', [
                'as' => 'configs.users.update',
                'uses' => 'Configs\UsersController@update'
            ]);

            Route::get('destroy', [
                'as' => 'configs.users.destroy',
                'uses' => 'Configs\UsersController@destroy'
            ]);

        });

    });

    // ROLES Routes

    Route::group(['prefix'=> 'roles'], function(){

        $module = 'roles';

        Route::get('index', [
            'as' => 'configs.'.$module.'.index',
            'uses' => 'Configs\RolesController@index'
        ]);

        Route::get('create', [
            'as' => 'configs.'.$module.'.create',
            'uses' => 'Configs\RolesController@create'
        ]);

        Route::post('store', [
            'as' => 'configs.'.$module.'.store',
            'uses' => 'Configs\RolesController@store'
        ]);

        Route::group(['prefix' => '{id?}'], function() use($module) {

            Route::get('edit', [
                'as' => 'configs.'.$module.'.edit',
                'uses' => 'Configs\RolesController@edit'
            ]);

            Route::post('udpate', [
                'as' => 'configs.'.$module.'.update',
                'uses' => 'Configs\RolesController@update'
            ]);

            Route::get('destroy', [
                'as' => 'configs.'.$module.'.destroy',
                'uses' => 'Configs\RolesController@destroy'
            ]);

            Route::get('permisos', [
                'as' => 'configs.'.$module.'.permissions',
                'uses' => 'Configs\RolesController@permissions'
            ]);

            Route::post('permisos', [
                'as' => 'configs.'.$module.'.permissions',
                'uses' => 'Configs\RolesController@postPermissions'
            ]);

        });




    });



    // PERMISSIONS Routes

    Route::group(['prefix'=> 'permissions'], function(){

        $module = 'permissions';

        Route::get('index', [
            'as' => 'configs.'.$module.'.index',
            'uses' => 'Configs\PermissionsController@index'
        ]);

        Route::get('create', [
            'as' => 'configs.'.$module.'.create',
            'uses' => 'Configs\PermissionsController@create'
        ]);

        Route::post('store', [
            'as' => 'configs.'.$module.'.store',
            'uses' => 'Configs\PermissionsController@store'
        ]);

        Route::group(['prefix' => '{id?}'], function() use ($module) {

            Route::get('edit', [
                'as' => 'configs.'.$module.'.edit',
                'uses' => 'Configs\PermissionsController@edit'
            ]);

            Route::post('udpate', [
                'as' => 'configs.'.$module.'.update',
                'uses' => 'Configs\PermissionsController@update'
            ]);

            Route::get('destroy', [
                'as' => 'configs.'.$module.'.destroy',
                'uses' => 'Configs\PermissionsController@destroy'
            ]);

        });

    });
});
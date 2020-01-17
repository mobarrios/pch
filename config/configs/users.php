<?php

$module = 'users';

return [

    'paginate' => '50',
    'updateable' => false,


//directorio de las vistas

    'viewIndex' => 'configs.'.$module . '.index',
    'viewForm' => 'configs.'.$module . '.form',
    'viewShow' => $module.'.show',


    //rutas del modulo

    'routeCreate' => 'configs.'.$module . '.create',
    'routeEdit' => 'configs.'.$module . '.edit',
    'routeUpdate' => 'configs.'.$module . '.update',
    'routeStore' => 'configs.'.$module . '.store',
    'routeDestroy' => 'configs.'.$module . '.destroy',
    'routeShow' => $module.'.show',


    //validaciones de creación

    'validationsStore' =>
        [
            'fullname' => 'required',
            'username' => 'required|unique:users',
            'name' => 'required',
//            'slug' =>'required',
//            'level'=>'required',
//            'tiny' =>  'required|boolean',
            'roles_id'=> 'required',
            'email'=> 'required|email',
            'password'=> 'required'

        ],

    //validaciones de edición

    'validationsUpdate' => [
        'name' => 'required',
//        'slug' =>'required',
//        'level'=>'required',
//        'tiny' =>  'required|boolean',
//        'date'=> 'required|date',
        'roles_id'=> 'required',
        'email'=> 'required|email'
    ],

];
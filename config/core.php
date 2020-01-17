<?php

$module = 'core';

return [

'paginate' => '50',
'updateable' => true,


//directorio de las vistas

    'viewIndex' => $module.'.index',
    'viewForm' => $module.'.form',
    'viewShow' => $module.'.show',

    //rutas del modulo

    'routeCreate' => $module.'.create',
    'routeEdit' => $module.'.edit',
    'routeUpdate' => $module.'.update',
    'routeStore' => $module.'.store',
    'routeDestroy' => $module.'.destroy',
    'routeShow' => $module.'.show',


    //validaciones de creación

    'validationsStore' =>
        [
            'text' =>  'required',
             //'string' =>  'required',
             'tiny' =>  'required|boolean',
             'double' =>    'required',

//            'date'=> 'required|date',
 //           'email'=> 'required|email'
        ],

    //validaciones de edición

    'validationsUpdate' => [
        'text' =>  'required',
        'string' =>  'required',
        'tiny' =>  'required|boolean',
        'double' =>  'required',

//        'date'=> 'required|date',
  //     'email'=> 'required|email'
    ],

];

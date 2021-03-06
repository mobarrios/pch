<?php

$module = 'banco.sucursal';

return [

'paginate' => '50',
'updateable' => true,


//directorio de las vistas

    'viewIndex' => $module.'.index',
    'viewForm' => $module.'.form',
    'viewShow' => $module.'.show',
    'viewBuscar' => $module.'.buscar',

    //rutas del modulo

    'routeCreate' => $module.'.create',
    'routeEdit' => $module.'.edit',
    'routeUpdate' => $module.'.update',
    'routeStore' => $module.'.store',
    'routeBuscar' => $module.'.buscar',
    'routeDestroy' => $module.'.destroy',
    'routeShow' => $module.'.show',


    //validaciones de creación

    'validationsStore' =>
        [
         
            'nombre' => 'required',
            'cod' => 'required|numeric'
//            'date'=> 'required|date',
 //           'email'=> 'required|email'
        ],

    //validaciones de edición

    'validationsUpdate' => [
      
        'nombre' => 'required',
        'cod' => 'required|numeric'
//        'date'=> 'required|date',
  //     'email'=> 'required|email'
    ],

];

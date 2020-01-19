<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//api
//
// Route::group(['middleware'=>'cors'], function(){

//     Route::get('api/{dni?}',function($dni){

//         $t = DB::table('personas')->where('nro_documento','=',$dni)
//         ->join('operativos_personas','operativos_personas.personas_id','=','personas.id')
//         ->join('operativos','operativos.id','=','operativos_personas.operativos_id')
//         ->join('personas_tarjetas','personas_tarjetas.personas_id','=','personas.id')
//         ->join('geos', function ($q) {
//                 $q->on('operativos.id', '=', 'geos.entities_id')
//                     ->where('geos.entities_type', 'like', '%Operativo%');
//             })
//         ->join('tarjetas','tarjetas.id','=','personas_tarjetas.tarjetas_id')
//         //->join('sucursales','sucursales.id','=','tarjetas.sucursales_id')
//         ->select('personas.nombre as nombre','personas.apellido as apellido' ,'nro_documento','cuit',
//             //'sucursales.cod as cod',
//             //'sucursales.nombre as sucnom',
//             //'tarjetas.retiro_fecha',
//             //'tarjetas.retiro_hora')
//             'operativos_personas.operativos_id',
//             'operativos.nombre as op','geos.calle', 'geos.numero','geos.provincia','geos.localidad','geos.municipio','tarjetas.retiro_fecha','tarjetas.retiro_hora')
//         ->first();
         

//             if(!empty($t)){

//                 // Operativo la matanza
//                 if($t->operativos_id == 5){
//                     $f = '27-01 al 31-01';
//                     $h = 'Dia y hora a definir';
//                 }
//                 else{

//                     $f = $t->retiro_fecha;
//                     $h = $t->retiro_hora;
//                 }
                 


//                 $data = [   "status" => 'ok', 
//                             "data" => [
//                                         'nombre'        => $t->nombre,
//                                         'apellido'      => $t->apellido,
//                                         'dni'           => $t->nro_documento,
//                                         'operativos'    => $t->op,
//                                         'direccion'     => $t->calle,
//                                         'numero'        => $t->numero,
//                                         'provincia'     => $t->provincia,
//                                         'municipio'     => $t->municipio,
//                                         'localidad'     => $t->localidad,
//                                         'fecha'         => $f,
//                                         'hora'          => $h


//                                         //'operativos_direccion' => $
//                                         //'sucursal_cod' => $t->cod,
//                                         //'sucursal_nom' => $t->sucnom,
//                                         //'fecha_retiro' => $t->retiro_fecha,
//                                         //'hora_retiro' => $t->retiro_hora
//                         ]
//                     ];


//             }else{

//                  $data = ["status" => 'persona no encontrada'];
//             }        

//          return response()->json($data);
//     });

// });

Auth::routes();

Route::get('auth/login', [
    'as' => 'auth.login',
    'uses' => 'Auth\AuthController@login'
]);

Route::get('auth', [
    'as' => 'auth.validate',
    'uses' => 'Auth\AuthController@validateLogin'
]);

// (env('SSO_AUTH')? 'auth_sso':'auth' ) valida si usa sso o validacion local
Route::group(['middleware'=> (env('SSO_AUTH')? 'auth.sso':'auth' )],function(){

    Route::get('chagepassword', [
        'as' => 'change_password',
        'uses' => 'Configs\UsersController@changePassword'
    ]);
    Route::post('updatePassword', [
        'as' => 'updatePassword',
        'uses' => 'Configs\UsersController@updatePassword'
    ]);

    // Route::get('buscar/{elemento}', [
    //     'as' => 'operativo.buscar',
    //     'uses' => 'OperativoController@buscar'
    // ]);

    // Route::get('buscar/{elemento}', [
    //     'as' => 'operativo.buscarPost',
    //     'uses' => 'OperativoController@buscarPost'
    // ]);

    Route::get('update_concurrio/{persona_id}/{operativo_id}', [
        'as' => 'operativo.update_concurrio',
        'uses' => 'OperativoController@updateConcurrio'
    ]);




    // require(__DIR__ .'/pch/personas.php');
    require(__DIR__ .'/pch/generos.php');
    require(__DIR__ .'/pch/programas.php');
    require(__DIR__ .'/pch/bancos.php');
    require(__DIR__ .'/pch/tipo_documento.php');
    require(__DIR__ .'/pch/estado_civil.php');
    require(__DIR__ .'/pch/consumos.php');

    require(__DIR__ .'/configs/importarDatosRoutes.php');

    Route::get('/', 'OperativoController@buscar')->name('home');
    Route::get('home', 'OperativoController@buscar');


    // Operativo
    Route::group(['prefix'=> 'operativo'], function(){

        Route::get('index', [
            'as' => 'operativo.index',
            'uses' => 'OperativoController@index'
        ]);

        Route::get('create', [
            'as' => 'operativo.create',
            'uses' => 'OperativoController@create'
        ]);

        Route::post('store', [
            'as' => 'operativo.store',
            'uses' => 'OperativoController@store'
        ]);

        Route::get('buscar', [
            'as' => 'operativo.buscar',
            'uses' => 'OperativoController@buscar'
        ]);

        Route::post('buscar', [
            'as' => 'operativo.buscarPost',
            'uses' => 'OperativoController@buscarPost'
        ]);

        Route::group(['prefix' => '{id?}'], function() {

            Route::get('edit', [
                'as' => 'operativo.edit',
                'uses' => 'OperativoController@edit'
            ]);

            Route::get('show', [
                'as' => 'operativo.show',
                'uses' => 'OperativoController@show'
            ]);

            Route::get('udpate', [
                'as' => 'operativo.update',
                'uses' => 'OperativoController@update'
            ]);

            Route::get('destroy', [
                'as' => 'operativo.destroy',
                'uses' => 'UsersController@destroy'
            ]);
        });
    });
});

Route::view('setup','configs.setup.form');

Route::post('setup',function(\Illuminate\Http\Request $request) {

   $module = $request->module;

   try{

       \Illuminate\Support\Facades\Artisan::call('make:model',['name'=> $module]);

   }catch (Exception $e)
   {
       dd($e->getMessage());
   }


})->name('setup.post');

// ejemplo unidb

// Route::get('unidb',function(\App\Http\Functions\ApimdsFunction $api){

//     $api->call(env('API_MDS_URL').'/unidb/renaper/f/27902367');
//     $res = $api->getResultado();

//    dd($res);
// });

Route::get('personas/buscar/{search?}', [
    'as' => 'personas.formulario',
    'uses' => 'OperativoController@formulario'
]);

Route::post('personas/buscar', [
    'as' => 'personas.postFormulario',
    'uses' => 'OperativoController@postFormulario'
]);
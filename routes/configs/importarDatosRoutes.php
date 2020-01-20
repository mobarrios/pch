<?php
Route::get('nuevoPadron', [
	'as' => 'importarDatos.nuevoPadron',
	'uses' => 'Configs\ImportarDatosController@nuevoPadron'
]);

Route::get('nuevasSucursales', [
	'as' => 'importarDatos.nuevasSucursales',
	'uses' => 'Configs\ImportarDatosController@nuevasSucursales'
]);

Route::get('nuevasPersonasOperativos', [
	'as' => 'importarDatos.nuevasPersonasOperativos',
	'uses' => 'Configs\ImportarDatosController@nuevasPersonasOperativos'
]);

Route::get('personasDiasHorarios', [
	'as' => 'importarDatos.personasDiasHorarios',
	'uses' => 'Configs\ImportarDatosController@personasDiasHorarios'
]);

Route::get('updateOperativos', [
	'as' => 'importarDatos.updateOperativos',
	'uses' => 'Configs\ImportarDatosController@updateOperativos'
]);

Route::get('operativosConcordia', [
	'as' => 'importarDatos.operativosConcordia',
	'uses' => 'Configs\ImportarDatosController@operativosConcordia'
]);

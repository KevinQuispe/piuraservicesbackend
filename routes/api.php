<?php

use Illuminate\Http\Request;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
//rutas listar usuarios
Route::resource('usuario/getUsuarios', 'Consultas\UsuarioEmpresaController');
Route::resource('usuario/createUsuario', 'Consultas\UsuarioEmpresaController');

//rutas para listar info entidad empresa
Route::resource('informacion/createInfoEntidad', 'Consultas\EntidadEmpresaController');
Route::resource('informacion/getInfoEntidades', 'Consultas\EntidadEmpresaController');

// retornar informacion reclamos de reclamos con resoource 
Route::resource('informacion/createInfoReclamo', 'Consultas\InfoReclamosController');
Route::resource('informacion/getInfoReclamos', 'Consultas\InfoReclamosController');

// retornar informacion reclamos de tramites con resoource 
Route::resource('informacion/createInfoTramite', 'Consultas\InfoTramitesController');
Route::resource('informacion/getInfoTramites', 'Consultas\InfoTramitesController');
// retornar informacion de entidades con resource y parametro
Route::resource('informacion/listainfoentidades', 'Consultas\EntidadEmpresaController');

// retornar informacion de reclamos  y tramites con id y funcion custumize para la app
//lista informacion json for app piura services
Route::get('informacion/listainforeclamos/{id}', 'Consultas\InfoReclamosController@getinforeclamos');
Route::get('informacion/listainfotramites/{id}', 'Consultas\InfoTramitesController@getinfotramites');
Route::get('informacion/listainfoentidades', 'Consultas\EntidadEmpresaController@index');   
//lista infor referencial entidad empresa
Route::get('informacion/listainfoentidad/{id}', 'Consultas\EntidadEmpresaController@getinfoentidad'); 
//lsita informacion  de contactos en json for app piura services
Route::get('informacion/listacontactos/{id}', 'Consultas\ContactoController@getinfocontacto');


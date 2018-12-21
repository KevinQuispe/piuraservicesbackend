<?php

Route::get('/', function () {
    if (DB::table('rolempresa')->count()==0) {
        DB::table('rolempresa')->insert(['nombre'=>'Administrador']);
        DB::table('rolempresa')->insert(['nombre'=>'Admin EPS Grau S.A']);
        DB::table('rolempresa')->insert(['nombre'=>'Admin Enosa']);
        DB::table('rolempresa')->insert(['nombre'=>'Admin Movistar']);
        DB::table('rolempresa')->insert(['nombre'=>'Admin Claro']);
        DB::table('rolempresa')->insert(['nombre'=>'Admin Entel']);

        DB::table('users')->insert(['rol_id'=>'1', 'name'=>'Kevin Quispe',
        'email'=>'kquispe07@gmail.com', 'password'=>bcrypt('administrador')]);
    }
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



//rutas crud entidad empresa epsgrau
Route::resource('serviciospiura/entidadepsgrau/listar', 'Admininfo\infoepsgrau\EpsGrauController');
Route::resource('serviciospiura/entidadepsgrau/reclamos', 'Admininfo\infoepsgrau\ReclamosController');
Route::resource('serviciospiura/entidadepsgrau/tramites', 'Admininfo\infoepsgrau\TramitesController');
Route::resource('serviciospiura/entidadepsgrau/scraping', 'Scraping\ScrapingEpsGrauController');
Route::resource('serviciospiura/entidadepsgrau/contactos', 'Admininfo\infoepsgrau\ContactosController');

//rutas crud entidad empresa enosa  
Route::resource('serviciospiura/entidadenosa/listar', 'Admininfo\infoenosa\EnosaController');
Route::resource('serviciospiura/entidadenosa/reclamos', 'Admininfo\infoenosa\ReclamosController');
Route::resource('serviciospiura/entidadenosa/tramites', 'Admininfo\infoenosa\TramitesController');
Route::resource('serviciospiura/entidadenosa/scraping', 'Scraping\ScrapingEnosaController');
Route::resource('serviciospiura/entidadenosa/contactos', 'Admininfo\infoenosa\ContactosController');
//rutas crud entidad empresa movistar
Route::resource('serviciospiura/empresamovistar/listar', 'Admininfo\infotelefonia\TelefoniaController');
Route::resource('serviciospiura/empresamovistar/reclamos', 'Admininfo\infotelefonia\ReclamosController');
Route::resource('serviciospiura/empresamovistar/tramites', 'Admininfo\infotelefonia\TramitesController');
Route::resource('serviciospiura/empresamovistar/scraping', 'Scraping\ScrapingMovistarController');
Route::resource('serviciospiura/empresamovistar/contactos', 'Admininfo\infotelefonia\ContactosController');
//rutas crud entidad empresa claro
Route::resource('serviciospiura/empresaclaro/listar', 'Admininfo\infoclaro\ClaroController');
Route::resource('serviciospiura/empresaclaro/reclamos', 'Admininfo\infoclaro\ReclamosController');
Route::resource('serviciospiura/empresaclaro/tramites', 'Admininfo\infoclaro\TramitesController');
Route::resource('serviciospiura/empresaclaro/contactos', 'Admininfo\infoclaro\ContactosController');
//rutas crud entidad empresa entel
Route::resource('serviciospiura/empresaentel/listar', 'Admininfo\infoentel\EntelController');
Route::resource('serviciospiura/empresaentel/reclamos', 'Admininfo\infoentel\ReclamosController');
Route::resource('serviciospiura/empresaentel/tramites', 'Admininfo\infoentel\TramitesController');
Route::resource('serviciospiura/empresaentel/contactos', 'Admininfo\infoentel\ContactosController');
//rutas crud administrar usuarios
Route::resource('serviciospiura/usuarioempresa', 'Consultas\UsuarioEmpresaController');

//rutas para listar informacion epsgrau con parametros
Route::get('serviciospiura/entidadepsgrau/getinforeclamos', 'Admininfo\infoepsgrau\EpsGrauController@getinforeclamos');
Route::get('serviciospiura/entidadepsgrau/getinforeclamos/{id}', 'Admininfo\infoepsgrau\EpsGrauController@getinforeclamos');
Route::get('serviciospiura/entidadepsgrau/getinfotramites/{id}', 'Admininfo\infoepsgrau\EpsGrauController@getinfotramites');

//rutas para listar informacion enosa con parametros
Route::get('serviciospiura/entidadenosa/getinforeclamos', 'Admininfo\infoenosa\EnosaController@getinforeclamos');
Route::get('serviciospiura/entidadenosa/getinforeclamos/{id}', 'Admininfo\infoenosa\EnosaController@getinforeclamos');
Route::get('serviciospiura/entidadenosa/getinfotramites/{id}', 'Admininfo\infoenosa\EnosaController@getinfotramites');
//rutas para listar informacion movistar
Route::get('serviciospiura/empresamovistar/getinforeclamos', 'Admininfo\infotelefonia\TelefoniaController@getinforeclamos');
Route::get('serviciospiura/empresamovistar/getinforeclamos/{id}', 'Admininfo\infotelefonia\TelefoniaController@getinforeclamos');
Route::get('serviciospiura/empresamovistar/getinfotramites/{id}', 'Admininfo\infotelefonia\TelefoniaController@getinfotramites');
//rutas para listar informacion claro
Route::get('serviciospiura/empresaclaro/getinforeclamos', 'Admininfo\infoclaro\ClaroController@getinforeclamos');
Route::get('serviciospiura/empresaclaro/getinforeclamos/{id}', 'Admininfo\infoclaro\ClaroController@getinforeclamos');
Route::get('serviciospiura/empresaclaro/getinfotramites/{id}', 'Admininfo\infoclaro\ClarorController@getinfotramites');
//rutas para listar informacion entel
Route::get('serviciospiura/empresaentel/getinforeclamos', 'Admininfo\infoentel\EntelController@getinforeclamos');
Route::get('serviciospiura/empresaentel/getinforeclamos/{id}', 'Admininfo\infoentel\EntelController@getinforeclamos');
Route::get('serviciospiura/empresaentel/getinfotramites/{id}', 'Admininfo\infoentel\EntelController@getinfotramites');

//rutas para listar informacion de tramites web scraping
Route::resource('serviciospiura/scraping/enosa', 'Scraping\ScrapingEnosaController');
Route::resource('serviciospiura/scraping/epsgrau', 'Scraping\ScrapingEpsGrauController');
Route::resource('serviciospiura/scraping/movistar', 'Scraping\ScrapingMovistarController');
//Rutas para hacer la comparacion de informacion con web scraping
Route::get('serviciospiura/scraping/compareinfoepsgrau', 'Scraping\ScrapingEpsgrauController@comparescraping');
Route::get('serviciospiura/scraping/compareinfoenosa', 'Scraping\ScrapingEnosaController@comparescraping');
Route::get('serviciospiura/scraping/compareinfomovistar', 'Scraping\ScrapingMovistarController@comparescraping');


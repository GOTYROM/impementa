<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

/*
route:: get('/prueba', function(){
    return view ('hola');
}
  );

  route:: get('/mensaje', function(){
    return "<h1>Este es un mensaje desde la ruta</h1>";
  }
  );

  route:: get('/mensaje/datos', function(){
    $datos=['Enero', 'Febrero', 'Marzo', 'Abril'];
    return $datos;
  });

  route:: get('/empleados', function(){
    $empleados =['Id' => '0001', 'Nombre' => 'Juan','Salario' => 5000];
    return $empleados;
  });

  route:: get('/mensaje/{nombre}', function($captura){
    return 'Hola '. $captura. ' Bienvenido';
 });

 route:: get('/alumnos/{nombre?}', function ($alm= 'Alumno invitado') {
    return 'Hola '. $alm;

 });

 route:: get('alumno',function(){
  return view('alumnos');
 });

 route::get('/alumno/crear', function(){
  return 'Estoy en la vista de crear alumno';
 });
 
 route::get('/alumno/edit', function(){
  return 'Estoy en la vista de editar alumno';
 });

 route::get('/alumno/eliminar', function(){
  return 'Estoy en la vista de eliminar alumno';
 });

  route::get('/enviar/{nombre}', function($captura){
  return view('hola',['xx'=>$captura]);
 });
*/

/*
route::get('/prueba','App\Http\Controllers\PruebaController@index');

route::get('/alumnos','App\Http\Controllers\AlumnoController@index');
*/

route::resource('/alumno','App\Http\Controllers\AlumnoController');

route::resource('/cliente','App\Http\Controllers\ClienteController');

route::resource('/telefono','App\Http\Controllers\TelefonoController');

/*route::resource('/telefono/crear/{x}','App\Http\Controllers\TelefonoController@crear');*/

route:: get('menu',function(){
  return view('hola');
 });
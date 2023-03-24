<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hola', function () {
    return ('Hola Mundo');
});

Route::get('usuarios', function () {
    return ('Usuarios');
});

Route::get('usuarios/{nombre}/{id}', function ($nombre, $id) {
    return 'Este es el usuario '.$nombre.' su id es '.$id;
});

Route::get('/cursos', function () {
    return ('Cursos');
});

Route::get('/cursos', function () {
    $nombre="LFercho";
    return view ('cursos', compact('nombre'));

});

Route::get('/cursosArray', function(){
    $nombre='Luis Fernando';
    return view('cursos',['nombre'=>$nombre]);
});

Route::get('/cursosArray2', function(){
    return view('cursos',['curso1'=>'javaScript', 'curso2'=>'Java', 'curso3'=>'php']);
});
Route::get('calculadora', function () {
    return view ('Calculadora');


});
Route::get('array3', function () {
    
    $datos=array(
        
        'curso1'=>'JavaScript',
        'curso2'=>'Java',
        'curso3'=>'php'
        
    );
    return view ('array3')->with('datos',$datos);
});
Route::post('calculadora','ControllerFormulario@suma')->name('Rsuma');


    




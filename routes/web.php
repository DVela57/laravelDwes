<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\StudyController;
use App\Http\Controllers\PruebaController;
use App\Http\Controllers\AppEjemplo;
use App\Http\Controllers\AsignaturaController;
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
    //return view('welcome');
    print "<a href='" . Route('infoasig') . "'>Informacion Asignatura</a><br>";
});

Route::get('/hola', function () {
    return $_SERVER;
    dd($_SERVER);
});

Route::get('/hola/{nombre}', function ($nombre) {
    echo "Hola " . $nombre;
});

Route::get('/saludo/{nombre?}', function ($nombre = "Mundo") {
    echo "Hola $nombre";
});

//Route::get('/studies', [StudyController::class, 'index']);
//Route::get('/studies/create', [StudyController::class, 'create']);
//Route::get('/studies/{id}', [StudyController::class, 'show'])
//->where ('id', '[\d]+');
//Route::get('/studies/{id}/edit', [StudyController::class, 'edit']);
//Route::delete('/studies/{id}', [StudyController::class, 'destroy']);
//Route::put('/studies/{id}', [StudyController::class, 'update']);
//Route::post('/studies}', [StudyController::class, 'store']);

Route::resource('/studies', StudyController::class);

//PruebaController

Route::get('prueba2/{name}', [PruebaController::class, 'saludoCompleto']);


//Rutas con nombre(alias)

Route::get('/informacion-asignatura', 
[AppEjemplo::class, 'mostrarinformacion']) ->name('infoasig');

//ejercicio1

Route::resource('asignaturas', AsignaturaController::class);
<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\StudyController;
use App\Http\Controllers\PruebaController;
use App\Http\Controllers\AppEjemplo;
use App\Http\Controllers\AsignaturaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CatalogController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductoController;

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
    //print "<a href='" . Route('infoasig') . "'>Informacion Asignatura</a><br>";
});
/*
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

//ejercicioVideoclub

Route::get('/', [HomeController::class, 'getHome']);
Route::get('/catalog', [CatalogController::class, 'getIndex']);
Route::get('/catalog/show/{id}', [CatalogController::class, 'getShow']);
Route::get('/catalog/create', [CatalogController::class, 'getCreate']);
Route::get('/catalog/edit/{id}', [CatalogController::class, 'getEdit']);

*/
// ejemplo 

Route::get('/productos/html', [ProductoController::class, 'indexhtml']);
Route::get('/productos/json', [ProductoController::class, 'indexjson']);
Route::resource('productos', ProductoController::class);


Route::resource('products', ProductController::class);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('clients', ClientController::class);

Route::resource('users', UserController::class);

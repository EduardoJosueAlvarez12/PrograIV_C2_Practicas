<?php

use Illuminate\Support\Facades\Route;
//llamada al controlador
use App\Http\Controllers\TestController;

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

//creamos una ruta, el primer parametro es la ruta
//luego especificamos la clase del controlador y el metodo index
Route::get('/test', [TestController::class, 'index']);
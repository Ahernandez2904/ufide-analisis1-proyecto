<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\perfilAdminVehiculoController;


Route::view('/', 'Index')->name('index');
Route::resource('CitasAdmin', 'citas_admin_controller');
Route::resource('Citas', 'citas_cliente_controller');
Route::resource('perfilAdmin', 'perfilAdminController');
Route::resource('perfilCliente', 'perfilClienteController');
Route::resource('perfilAdminVehiculo', 'perfilAdminVehiculoController');
Route::resource('perfilAdminEditarVehiculo', 'perfilAdminVehiculoController');
Route::resource('perfilClienteVehiculo', 'perfilClienteVehiculoController');
Route::resource('clientesAdmin', 'clientesAdminController');




/*use App\Http\Controllers\clientesAdminController;
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the 'web' middleware group. Now create something great!
|
$clientesAdminV = DB::table('usuario')->get();


Route ::get('/clientesAdmin', clientesAdminController::class, 'index');

Route::get('/', function () {
    return view('clientesAdmin');
});

Route::view('/clientesAdmin','clientesAdmin',compact('clientesAdminV'));
Route ::get('/clientesAdmin', clientesAdminController::class, 'index');
*/






<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'Index')->name('index');
Route::resource('CitasAdmin', 'citas_admin_controller');
Route::resource('Citas', 'citas_cliente_controller');
Route::resource("perfilesAdmin", "perfilAdminController")->parameters(["perfilesAdmin"=>"perfilAdmin"]);
Route::resource("clientesAdmin", "clientesAdminController")->parameters(["clientesAdmin"=>"clientesAdmin"]);




/*use App\Http\Controllers\clientesAdminController;
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
$clientesAdminV = DB::table('usuario')->get();


Route ::get('/clientesAdmin', clientesAdminController::class, 'index');

Route::get('/', function () {
    return view('clientesAdmin');
});

Route::view('/clientesAdmin','clientesAdmin',compact('clientesAdminV'));
Route ::get('/clientesAdmin', clientesAdminController::class, 'index');
*/






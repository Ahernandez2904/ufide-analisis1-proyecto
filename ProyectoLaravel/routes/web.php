<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'Index')->name('index');
Route::resource('CitasAdmin', 'citas_admin_controller');
Route::resource('Citas', 'citas_cliente_controller');
Route::resource("perfilesAdmin", "perfilAdminController")->parameters(["perfilesAdmin"=>"perfilAdmin"]);


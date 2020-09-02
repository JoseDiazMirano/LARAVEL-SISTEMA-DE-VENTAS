<?php

use Illuminate\Support\Facades\Route;


Auth::routes();

//Route::get('/verific', function () { return view('verific');});verificar los correos
Route::get('/', function () { return view('welcome');});

//ADMINISTRADOR 
Route::get('/home', 'HomeController@index')->name('home');
Route::resource('/usuarios', 'UserController');
Route::resource('/roles', 'RoleController');


//RUTAS PARA ACCESAR A PLATOS 
Route::resource('/pedidos/todos', 'PedidosController');
Route::get('/pedidos/admin/general', 'PedidosController@todos');
//RUTAS PARA ACCESAR A ENTRADAS
//Route::resource('/pedidos/entradas', 'EntradasController'); 
//Route::get('/pedidos/admin/generalen', 'EntradasController@todosen');

//RUTAS PARA ACCESAR A ENTRES
Route::resource('/pedidos/bebidas', 'BebidasController'); 
Route::get('/pedidos/admin/generalbe', 'BebidasController@todosbe');
//PRODUCTOS
Route::get('/shopcart/productos', 'ProductoController@productos')->middleware('auth');
Route::get('/shopcart/cart', 'ProductoController@cart')->name('shopcart.cart');
Route::get('add-to-cart/{id}', 'ProductoController@addtoCart')->middleware('auth');

//USUARIOS

//Route::resource('/usuarios/usuarioC', 'UserController@showUsu');
Route::get('/shopcart/miusuario', 'UserController@rederitc');
Route::get('shopcart/editusu', 'UserController@editusu');
Route::get('shopcart/edit/show', 'UserController@showuser');


//PDF
Route::name('imprimir')->get('/imprimir-pdf','ProductoController@imprimir');
Route::name('imprimirCarnet')->get('/imprimircarnet-pdf','ProductoController@imprimirCarnet');
<?php

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
Route::get('/home', function () {
    return view('home');
});
Route::get('/types',function(){
 return view('types');}
);
Route::get('/oder',function()
{
    return view('oder');
});
Route::get('/service',function()
{
    return view('service');
});

Route::get('/about',function()
{
    return view('about');
});
Route::post('/save','Odercontroller@save');
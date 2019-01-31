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
Route::get('/demo/{product}/{name?}', function ($product, $name = null){

    $string_hello = '';
    if($name == null){
        $string_hello =  'Hello'." ".$product;
    }else{
        $string_hello =  'Hello world, '.$product . ' '.$name;
    }
   return view('demo')->with('str_hello', $string_hello);
});
Route::get('demo', 'DemoController@demo');
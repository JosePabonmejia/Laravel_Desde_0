<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', function(){
//     return "Esta es la pagina principal";
// });

// Route::get('/post',function(){
//     return "ESTE ES EL POST";
// });
// Route::get('/post/block',function(){
//     return "ESTE ES EL BLOCK";
// });
// Route::get('/post/{post}',function($post){
//     return "ESTE ES EL {$post} ";
// });
// Route::get('/post/{post}/{category}',function($post,$category = "coca"){
//     return "Se muestra el producto{$post}, de la categoria{$category}";
// });

Route::get('/',[HomeController::class,'index']);
Route::get('/post',[PostController::class,'index']);
Route::get('/post/create',[PostController::class,'create']);
Route::get('/post/{$post}',[PostController::class,'show']);


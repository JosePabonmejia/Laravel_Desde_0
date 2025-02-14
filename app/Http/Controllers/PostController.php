<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        return "Estamos en el controlador del post";
    }
    public function create(){
        return "Se mostrara un formulario para crear usuasrios";
    }
    public function show($post){
        return "Estamos mostrando el {$post} como variable";
    }
}

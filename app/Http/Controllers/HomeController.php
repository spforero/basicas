<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //metodos para mostrar las vistas
    public function index(){
        return view('modulos/index');
    }
}

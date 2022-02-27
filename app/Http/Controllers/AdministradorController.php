<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdministradorController extends Controller
{
    public function administrador(){
        return view('modulos/administrador');
    }

    public function consultas(){
        return view('modulos/ciencias_basicas');
    }
    public function reporte(){
        return view('modulos/reporte');
    }
    public function saber_pro(){
        return view('modulos/ciencias_basicas');
    }
    public function aprendizaje_ova(){
        return view('modulos/aprendizaje_ova');
    }
    public function resultados(){
        return view('modulos/resultados_admin');
    }
}

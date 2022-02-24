@extends('layout.plantilla')
@section('title', 'Aprendizaje_Ova')
@section('content')
<style>
    .container h1, p, a{
        color: #100F4C;
    }
    .container {
        color: #100F4C;
    }
    .img{
        background-image: url("{{asset('img/administrador.png')}}");
        width: 300px;
        height:300px;
        margin: 1rem;
        margin: auto;
    }
    .image{
        background-image: url("{{asset('img/carpeta.png')}}");
        width: 50px;
        height:50px;
        
    }

    .cont{
            background-color: #100F4C;
        }
    .cont :hover{
        border-radius: 0.5rem;
    }

</style>

<nav class="cont  rounded-xl ">
    <ul class="flex h-10 text-center justify-between py-2">
        <li class="flex-auto hover:bg-blue-700 "><a class="text-white font-serif font-bold text-center text-lg" href=" ">Registrar usuario </a></li>
        <li class="flex-auto hover:bg-blue-700 "><a class="text-white font-serif font-bold text-center text-lg" href=" ">Prueba ciencias básicas </a></li>
        <li class="flex-auto hover:bg-blue-700 "><a class="text-white font-serif font-bold text-center text-lg" href=" ">Consultas </a>
        <li class="flex-auto hover:bg-blue-700 "><a class="text-white font-serif font-bold text-center text-lg" href=" ">Reporte</a></li>
        <li class="flex-auto hover:bg-blue-700 "><a class="text-white font-serif font-bold text-center text-lg" href=" ">Saber PRO </a></li>
        <li class="flex-auto hover:bg-blue-700 "><a class="text-white font-serif font-bold text-center text-lg" href="aprendizajeOVA_modi.html">Aprendizaje OVA </a></li>
        <li class="flex-auto hover:bg-blue-700 "><a class="text-white font-serif font-bold text-center text-lg" href=" ">Resultados </a></li>
    </ul>
</nav>
<div class="cont rounded-lg my-3 "> 
    <p class="text-center text-white font-serif- font-bold text-2xl">Aprendizaje Ova</p>
</div >
    <div class="flex">
    <div class="cont rounded max-w-xs pb-4">
        <p class="text-white font-serif font-bold text-center p-3">Archivos</p>
        <hr>
        <div class="flex p-4">
        <div class="image bg-contain bg.no-repeat"></div>
            <a class="text-white font-serif font-bold ml-2 mt-3 text-center" href="">Quimica</a>
        </div>
        <hr class="my-2">
        <a class="text-white font-serif font-bold m-4" href=""> + Crear nueva carpeta</a><br>
        <a class="text-white font-serif font-bold m-4" href=""> - Eliminar nueva carpeta</a><br>
        <a class="text-white font-serif font-bold m-4" href=""> - Modificar contenido</a> 
        <br>  
    </div>
    <div class="block">
    <p class="container font-serif font-bold text-justify flex mx-4" > Espacio establecido para subir contenido necesario para el auto-aprendizaje de los estudiantes que hayan reprobado alguna asignatura del área de ciencias básicas.
    </p>
    <div class=" ">
        <iframe class="pl-4" src="http://127.0.0.1/mio/video_prueba/video.mp4" frameborder="0" allowfullscreen="allowfullscreen"></iframe>
        <p></p>
    </div>
</div>
</div>

@endsection
    

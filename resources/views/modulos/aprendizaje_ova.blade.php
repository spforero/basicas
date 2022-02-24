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
    <p class="font-serif font-bold text-justify flex mx-4" > Espacio establecido para subir contenido necesario para el auto-aprendizaje de los estudiantes que hayan reprobado alguna asignatura del área de ciencias básicas.
    </p>
    <div class=" m-4 max-w-xs border-2 border-blue-900 ">
        <form class="flex items-center space-x-6">
            <div class="shrink-0">
              <img class="h-16 w-16 object-cover rounded-full" src="https://images.unsplash.com/photo-1580489944761-15a19d654956?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1361&q=80" alt="Current profile photo" />
            </div>
            <label class="block">
              <span class="sr-only">Choose profile photo</span>
              <input type="file" class="block w-full text-sm text-slate-500
                file:mr-4 file:py-2 file:px-4
                file:rounded-full file:border-0
                file:text-sm file:font-semibold
                file:bg-violet-50 file:text-violet-700
                hover:file:bg-violet-100
              "/>
            </label>
          </form>
        
    </div>
    <div class="flex mx-32 justify-end">
    <div >
        <input type="submit" name="Ingresar" class="btn btn-info btn-md text-white font-serif font-bold" value="Agregar" style="margin-right: 0.3rem; border-radius: 5rem; width: 8rem; background: #1E1C80; border-color: #1E1C80;">
        <input type="submit" name="Ingresar" class="btn btn-info btn-md text-white font-serif font-bold" value="Guardar" style="margin-left: 0.3rem; margin-right: 0.5rem; border-radius: 5rem;  width: 8rem; background: #1E1C80; border-color: #1E1C80;">
    </div>
</div>
</div>
</div>



@endsection
    

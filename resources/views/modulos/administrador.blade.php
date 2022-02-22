@extends('layout.plantilla')
@section('title', 'Administrador')
@section('content')
<style>
    
    .container h1, p{
        color: #100F4C;
    }

    .img{
        background-image: url("{{asset('img/administrador.png')}}");
        width: 300px;
        height:300px;
        margin: 1rem;
        margin: auto;
    }

    .cont{
            background-color: #100F4C;
        }
    .cont :hover{
        border-radius: 0.5rem;
    }

</style>

{{-- {{route('aprendizaje_ova')}}" class="{{request()->routeIs('aprendizaje_ova') ? 'active' : ''}} --}}
<nav class="cont  rounded-xl ">
    <ul class="flex h-10 text-center justify-between py-2">
        <li class="flex-auto hover:bg-blue-700 "><a class="text-white font-serif font-bold text-center text-lg" href=" ">Registrar usuario </a></li>
        <li class="flex-auto hover:bg-blue-700 "><a class="text-white font-serif font-bold text-center text-lg" href=" ">Prueba ciencias básicas </a></li>
        <li class="flex-auto hover:bg-blue-700 "><a class="text-white font-serif font-bold text-center text-lg" href=" ">Consultas </a>
        <li class="flex-auto hover:bg-blue-700 "><a class="text-white font-serif font-bold text-center text-lg" href=" ">Reporte</a></li>
        <li class="flex-auto hover:bg-blue-700 "><a class="text-white font-serif font-bold text-center text-lg" href=" ">Saber PRO </a></li>
        <li class="flex-auto hover:bg-blue-700 "><a class="text-white font-serif font-bold text-center text-lg" href="">Aprendizaje OVA </a></li>
        <li class="flex-auto hover:bg-blue-700 "><a class="text-white font-serif font-bold text-center text-lg" href=" ">Resultados </a></li>
    </ul>
</nav>

    
    <h1 class="text-3xl font-bold text-center pt-4  my-4">Área del Administrador</h1>
    <div class="img bg-contain"></div>
    <div class="text-justify m-40 font-serif text-lg my-10" ><p>Bienvenido al área del administrador, aquí podrás revisar el proceso que llevan los docentesy estudiantes, así mismo llevar el registro de docentes y estudiantes de la institución</p>
    </div>

@endsection
    

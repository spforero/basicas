<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>@yield('title')</title>
    <!--favicon-->
    <!--estilos-->
    <style>
        .imagen{
            background-image: url("{{asset('img/logo.png')}}");
            width: 150px;
            height:150px;
            margin: 1rem;
            margin-left: 3rem;
        }
        .imag{
            background-image: url("{{asset('img/logo_uni_bn.png')}}");
            width: 110px;
            height:110px;
            margin: 1rem;
            margin-left: 50%;
            
        
        }
        .cont{
            background-color: #100F4C;
            width: 100%;
        }
    </style>

</head>
<body>
    <!--header-->
    <div class="cont flex" >
        <div class="imagen bg-contain"></div>
        <div style="width:80%" class="justify-between flex" >
            <h1 class="text-6xl font-bold my-10 m-10 text-white font-serif">BasicSciences</h1>
            <a  class="text-xl font-bold my-20 text-white font-serif hover:text-blue-300" href="">Iniciar Sesion</a>
       </div>
    
    </div>
    

    
    <!--nav-->
    
    <div class="h-full bg-blue-100 mt-4 mb-4 pb-5 m-10 rounded-lg shadow-2xl">

    @yield('content')

  
    </div>
    <!--footer-->
    <footer class=" cont p-4">
        <p class="text-center text-white font-serif font-bold">FUNDACIÓN UNIVERSITARIA DE SAN GIL - UNISANGIL SEDE CHIQUINQUIRÁ</p>
        <p class="text-center text-white font-serif font-bold">TODOS LOS DERECHOS RESERVADOS UNISANGIL - 2016</p>
        <div class="object-right imag"></div>
    </footer>
    <!--script-->
</body>
</html>
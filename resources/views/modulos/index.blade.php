@extends('layout.plantilla')
@section('title', 'historia')
@section('content')
<style>
    .imagen{
        background-image: url("{{asset('img/logo.png')}}");
        width: 150px;
        height:150px;
        margin: 1rem;
        margin-left: 3rem;
        margin-right: 3rem;
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
    .container h1, p{
        color: #100F4C;
    }

    .img{
        background-image: url("{{asset('img/unisan.jpg')}}");
        margin: 1rem;
        margin-left: 3rem;
    }
</style>


<div class="container h-full bg-blue-100 mt-4 mb-4 ml-10 rounded-xl shadow-2xl">
    <h1 class="text-3xl font-bold text-center pt-4  mb-4">Bienvenidos a nuestra comunidad Unisangilista</h1>
   <img class="m-auto my-6" src="img/unisan.jpg" alt="">
   <div class="text-justify mx-40" ><p >Hace dos décadas se creó en Colombia una institución de educación superior cuyas características la han hecho particularmente diferente: Unisangil. Su origen fue la Economía Solidaria. Nació en San Gil, Santander, en 1988, motivada
       por el interés que tuvo un grupo de organizaciones sociales y cooperativas que vieron en la profesionalización, la ciencia, el conocimiento y la técnica un campo estratégico para el modelo de desarrollo regional.</p>
   <p>Dando cumplimiento a su vocación de origen, Unisangil ha tenido un papel de primer orden en la promoción de microempresarios, como también en la consolidación de un capital humano de primer nivel para buscar respuestas a necesidades
       y problemáticas de sus zonas de influencia, en un mapa que trasciende las fronteras físicas del departamento de Santander y se integra con Casanare y Boyacá. En 1992 inició labores académicas la sede San Gil; en 1996, la sede Yopal,
       y en 2000, la sede Chiquinquirá.
   </p>
   <p>En 2000 Unisangil firmó una alianza de cooperación con la Universidad Autónoma de Bucaramanga, UNAB, gracias a ella se ha tenido un fortalecimiento institucional y académico, este último se traduce en la oferta de programas académicos
       de la UNAB en la zona de influencia de Unisangil.
   </p>
   <br>
</div>
</div>
@endsection
    

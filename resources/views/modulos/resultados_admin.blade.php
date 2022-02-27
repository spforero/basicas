@extends('layout.plantilla')
@section('title', 'Resultados-Administrador')
@section('content')
<style>


    .cont{
            background-color: #100F4C;
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
<div class="cont rounded-t-lg my-3 "> 
    <p class="text-center text-white font-serif- font-bold text-3xl">Resultados</p>

    
    
</div>

<div class="m-8 rounded bg-blue-200">
  <div class="flex p-8">
    <label for="username" class="text-info mx-8 text-black font-serif font-bold p-2" style="color: #100F4C">Id</label>
    <input type="text" name="username" id="id" class="form-control rounded shadow-lg p-2">

    <label for="username" class="text-info mx-8 text-black font-serif font-bold p-2" style="color: #100F4C">Asignatura</label>
    <input type="text" name="username" id="asignatura" class="form-control rounded shadow-lg p-2">

    <img src="{{asset('img/buscar.png')}}" class=" mx-16 w-10 h-10"></div>
                
    
                    
  
<div class="p-10 place-content-between">
  <table class="border-2 border-black table-fixed w-full" >
    <thead class="cont">
      <tr class="text-white font-serif text-sm">
        <th class="border-2 border-black px-4 py-2" >Id</th>
        <th class="border-2 border-black px-4 py-2" >Nombre</th>
        <th class="border-2 border-black px-4 py-2" >Apellido</th>
        <th class="border-2 border-black px-4 py-2" >Asignatura</th>
        <th class="border-2 border-black px-4 py-2" >Nota</th>
        <th class="border-2 border-black px-4 py-2" >Promedio</th>
        <th class="border-2 border-black px-4 py-2" >Reporte</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td class="border border-black px-4 py-2">Indiana</td>
        <td class="border border-black px-4 py-2">Indianapolis</td>
        <td class="border border-black px-4 py-2">Indiana</td>
        <td class="border border-black px-4 py-2">Indianapolis</td>
        <td class="border border-black px-4 py-2">Indiana</td>
        <td class="border border-black px-4 py-2">Indianapolis</td>
        <td class="border border-black px-4 py-2">Indiana</td>
        
      </tr>
      <tr>
        <td class="border border-black px-4 py-2">Ohio</td>
        <td class="border border-black px-4 py-2">Columbus</td>
        <td class="border border-black px-4 py-2">Ohio</td>
        <td class="border border-black px-4 py-2">Columbus</td>
        <td class="border border-black px-4 py-2">Ohio</td>
        <td class="border border-black px-4 py-2">Columbus</td>
        <td class="border border-black px-4 py-2">Ohio</td>
      </tr>
      <tr>
        <td class="border border-black px-4 py-2">Michigan</td>
        <td class="border border-black px-4 py-2">Detroit</td>
        <td class="border border-black px-4 py-2">Michigan</td>
        <td class="border border-black px-4 py-2">Detroit</td>
        <td class="border border-black px-4 py-2">Michigan</td>
        <td class="border border-black px-4 py-2">Detroit</td>
        <td class="border border-black px-4 py-2">Michigan</td>
      </tr>
    </tbody>
  </table>
</div>
    <div class="flex justify-start pl-8 pb-4 ">
        <input type="submit" name="Imprimir" class="btn btn-info btn-md text-white font-serif font-bold bg-blue-900 rounded-lg p-2 m-2 hover:bg-blue-500 w-28" value="Editar" >
        <input type="submit" name="Descargar" class="btn btn-info btn-md text-white font-serif font-bold p-2 bg-blue-900 rounded-lg m-2 hover:bg-blue-500 w-28" value="Eliminar">
        <input type="submit" name="Imprimir" class="btn btn-info btn-md text-white font-serif font-bold bg-blue-900 rounded-lg p-2 m-2 hover:bg-blue-500 w-28" value="Guardar" >
        <input type="submit" name="Descargar" class="btn btn-info btn-md text-white font-serif font-bold p-2 bg-blue-900 rounded-lg m-2 hover:bg-blue-500 w-28" value="Imprimir">
    
    </div>
</div>



@endsection
    

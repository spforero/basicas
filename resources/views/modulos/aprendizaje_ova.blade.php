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
<div class="cont rounded-t-lg my-3 "> 
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
        <a class="text-white font-serif font-bold m-4 openModal" > + Crear nueva carpeta</a><br>
        <a class="text-white font-serif font-bold m-4" href=""> - Eliminar nueva carpeta</a><br>
        <a class="text-white font-serif font-bold m-4" href=""> - Modificar contenido</a> 
        <br>  
    </div>
    <div class="block">
    <p class="font-serif text-justify flex mx-4" > Espacio establecido para subir contenido necesario para el auto-aprendizaje de los estudiantes que hayan reprobado alguna asignatura del área de ciencias básicas.
    </p>
    <div class=" m-4 max-w-xs border-2 border-blue-900 ">
        <form class="flex items-center space-x-6 p-4">
              <label class="block">
              <input type="file" class="block w-full text-sm text-slate-500
                file:mr-4 file:py-2 file:px-4
                file:rounded-full file:border-0
                file:text-sm file:font-semibold
                file:bg-violet-50 file:text-violet-700
                hover:file:bg-violet-100"/>
            </label>
          </form>
        
    </div>
    <div class="flex mx-32 justify-end">
    <div >
        <input type="submit" name="Ingresar" class="btn btn-info btn-md text-white font-serif font-bold py-2" value="Agregar" style="margin-right: 0.3rem; border-radius: 5rem; width: 8rem; background: #1E1C80; border-color: #1E1C80;">
        <input type="submit" name="Ingresar" class="btn btn-info btn-md text-white font-serif font-bold py-2" value="Guardar" style="margin-left: 0.3rem; margin-right: 0.5rem; border-radius: 5rem;  width: 8rem; background: #1E1C80; border-color: #1E1C80;">
    </div>
</div>
</div>
</div>


<!-- MODAL PARA CREAR LA CARPETA -->
<div class="fixed z-10 inset-0 invisible overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true" id="interestModal">
    <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
        <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" aria-hidden="true"></div>
            <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">​</span>
            <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
                <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                    <div>
                        <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                            <h3 class="text-lg leading-6 font-medium text-gray-900" id="modal-title">Carpeta Nueva</h3>
                            <div class="mt-2">
                                <input type="name" name="name-folder"  class="p-4 mt-1 px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1" placeholder="Nombre de la carpeta" />
                            </div>
                        </div>
                    </div>
                </div>
            <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                <button type="button" onclick="alert('Aqui debe crear la carpeta');"  class="closeModal w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-blue-900 text-base font-medium text-white hover:bg-blue-500 focus:outline-none focus:ring-2 focus:bg-white sm:ml-3 sm:w-auto sm:text-sm">
                    Crear 
                </button>
                <button type="button" class="closeModal mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">
                    Cancel
                </button>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function () {
        $('.openModal').on('click', function(e){
            $('#interestModal').removeClass('invisible');
            // console.log('Abrir modal');
        });
        $('.closeModal').on('click', function(e){
            $('#interestModal').addClass('invisible');
            // console.log('Cerrar modal');
        });
    });
</script>


@endsection
    

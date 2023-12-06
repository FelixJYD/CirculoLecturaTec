<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';


</script>

<template>
    <Head title="Inicio" />

    <AuthenticatedLayout>
        <template #header>
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Te damos la Bienvenida, {{ $page.props.auth.user.name }}
    </h2>
</template>

  <!-- Card con libros recomendados -->
  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <h2 class="text-3xl font-semibold mb-6 text-center text-blue-950">Libros recomendados</h2>

        <div class="grid grid-cols-5 gap-4">
            <div class="card">
                <a href="http://bibliotecatecnm.mx/index.php?estado=no_registrado&accesscheck=%2Flibros.php">
                    <img class="w-full mb-4" src="https://m.media-amazon.com/images/I/41RWiL9JXkL._SY445_SX342_.jpg" alt="Imagen 1">
                </a>
            </div>
            <div class="card">
                <a href="http://bibliotecatecnm.mx/index.php?estado=no_registrado&accesscheck=%2Flibros.php">
                    <img class="w-full mb-4" src="https://m.media-amazon.com/images/I/41yxXxDdSlL._SY445_SX342_.jpg" alt="Imagen 2">
                </a>
            </div>
            <div class="card">
                <a href="http://bibliotecatecnm.mx/index.php?estado=no_registrado&accesscheck=%2Flibros.php">
                    <img class="w-full mb-4" src="https://m.media-amazon.com/images/I/51n1CNvskIS._SY445_SX342_.jpg" alt="Imagen 3">
                </a>
            </div>
            <div class="card">
                <a href="http://bibliotecatecnm.mx/index.php?estado=no_registrado&accesscheck=%2Flibros.php">
                    <img class="w-full mb-4" src="https://m.media-amazon.com/images/I/41lpAtedEUL._SY445_SX342_.jpg" alt="Imagen 4">
                </a>
            </div>
            <div class="card">
                <a href="http://bibliotecatecnm.mx/index.php?estado=no_registrado&accesscheck=%2Flibros.php">
                    <img class="w-full mb-4" src="https://m.media-amazon.com/images/I/41THVDFY9kL._SY445_SX342_.jpg" alt="Imagen 5">
                </a>
            </div>
        </div>
          <!-- Texto con link -->
        <a href="http://bibliotecatecnm.mx/index.php?estado=no_registrado&accesscheck=%2Flibros.php" class="block text-center font-medium dark:text-blue-950 hover:underline mt-4">Explorar más</a>
    </div>
      </div>
        <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-blue-950 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 p-6"> 
                <div class="card"> 
                    
                    <!-- LINEA DE TIEMPO ACTIVIDADES -->
                    <div class="w-full">
                    <div class="py-12">
                    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                        <div class="bg-blue-950 overflow-hidden shadow-sm sm:rounded-lg">
                         <div class="p-6 text-xl text-white">
                         Flujo De Actividades Pendientes
                   
                         <ol class="relative border-s border-white dark:border-white">
                     <li class="mb-10 ms-4">
                         <div class="absolute w-3 h-3 bg-gray-200 rounded-full mt-1.5 -start-1.5 border border-white dark:border-gray-900 dark:bg-white"></div>
                        <time class="mb-1 text-sm font-normal leading-none text-gray-400 dark:text-gray-400">Enero 2024</time>
                         <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Primer Encuentro Presencial</h3>
                         <p class="mb-4 text-base font-normal text-gray-500 dark:text-gray-400">Deberá acudir a la biblioteca a las 9:00 AM</p>
                     </li>
                    <li class="mb-10 ms-4">
                        <div class="absolute w-3 h-3 bg-gray-200 rounded-full mt-1.5 -start-1.5 border border-white dark:border-gray-900 dark:bg-white"></div>
                        <time class="mb-1 text-sm font-normal leading-none text-gray-400 dark:text-gray-400">Enero 2024 Semana 1</time>
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Comienzo de la lectura </h3>
                        <p class="text-base font-normal text-gray-500 dark:text-gray-400">Leer pagina 1 - 20, posteriormente elaborar su analisis </p>
                    </li>
                    <li class="ms-4">
                        <div class="absolute w-3 h-3 bg-gray-200 rounded-full mt-1.5 -start-1.5 border border-white dark:border-gray-900 dark:bg-white"></div>
                        <time class="mb-1 text-sm font-normal leading-none text-gray-400 dark:text-gray-400">Enero 2024 Semana 2</time>
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Asesoramientos individual</h3>
                        <p class="text-base font-normal text-gray-500 dark:text-gray-400">Presentarse con la encarga del área de lectura</p>
                    </li>
                 </ol>
             </div>
        </div>
     </div>
  </div>
 </div>
                    <!-- Card 2-->
                </div>
                <div class="card "></div>
            </div>
        </div>
    </div>
</div>


        <!-- LINEA DE TIEMPO ACTIVIDADES  -->
        <!-- <div class="w-/3">
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-blue-950 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-xl text-white">
                        Flujo De Actividades Pendientes -->
                        <!-- Agrega la lista ordenada (ol) aquí -->
                        <!-- <ol class="relative border-s border-white dark:border-white">
                            <li class="mb-10 ms-4">
                        <div class="absolute w-3 h-3 bg-gray-200 rounded-full mt-1.5 -start-1.5 border border-white dark:border-gray-900 dark:bg-white"></div>
                        <time class="mb-1 text-sm font-normal leading-none text-gray-400 dark:text-gray-400">Enero 2024</time>
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Primer Encuentro Presencial</h3>
                        <p class="mb-4 text-base font-normal text-gray-500 dark:text-gray-400">Debera acuidir a la biblioteca a la 9:00 Am</p>
                        
                    </li>
                    <li class="mb-10 ms-4">
                        <div class="absolute w-3 h-3 bg-gray-200 rounded-full mt-1.5 -start-1.5 border border-white dark:border-gray-900 dark:bg-white"></div>
                        <time class="mb-1 text-sm font-normal leading-none text-gray-400 dark:text-gray-400">Enero 2024 Semana 1</time>
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Comienzo de la lectura </h3>
                        <p class="text-base font-normal text-gray-500 dark:text-gray-400">Leer pagina 1 - 20, posteriormente elaborar su analisis </p>
                    </li>
                    <li class="ms-4">
                        <div class="absolute w-3 h-3 bg-gray-200 rounded-full mt-1.5 -start-1.5 border border-white dark:border-gray-900 dark:bg-white"></div>
                        <time class="mb-1 text-sm font-normal leading-none text-gray-400 dark:text-gray-400">Enero 2024 Semana 2</time>
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Asesoramientos individual</h3>
                        <p class="text-base font-normal text-gray-500 dark:text-gray-400">Presentarse con la encarga del área de lectura</p>
                    </li>
                </ol>
                    </div>
                </div>
            </div>
        </div>
    </div> -->

    
        
           <!-- MENSAJE OCTAVIO PAZ -->
           <figure class="max-w-screen-md mx-auto text-center">
    <svg class="w-10 h-10 mx-auto mb-3 text-blue-950 dark:text-blue-950" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 14">
        <path d="M6 0H2a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h4v1a3 3 0 0 1-3 3H2a1 1 0 0 0 0 2h1a5.006 5.006 0 0 0 5-5V2a2 2 0 0 0-2-2Zm10 0h-4a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h4v1a3 3 0 0 1-3 3h-1a1 1 0 0 0 0 2h1a5.006 5.006 0 0 0 5-5V2a2 2 0 0 0-2-2Z"/>
    </svg>
    <blockquote>
        <p class="text-2xl italic font-medium text-blue-950 dark:text-blue-950">Leer en la juventud puede ser un deslumbramiento y una embriaguez; en la madurez, un solaz; en la vejez, un consuelo."</p>
    </blockquote>
    <figcaption class="flex items-center justify-center mt-8 space-x-3 rtl:space-x-reverse">
        <img class="w-6 h-6 rounded-full" src="https://www.scaruffi.com/images/paz2.jpg" alt="profile picture">
        <div class="flex items-center divide-x-2 rtl:divide-x-reverse divide-gray-500 dark:divide-gray-700">
            <cite class="pe-3 font-medium text-blue-950 dark:text-blue-950">Octavio Paz</cite>
            <cite class="ps-3 text-sm text-blue-950 dark:text-blue-950"> Escritor y poeta mexicano</cite>
        </div>
    </figcaption>
</figure>
       
  <!-- CONVOCATORIA LECTURA -->
        <!-- <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <a href="https://www.tecnm.mx/pdf/poesias/Comunicado-ViralicemosLectura.pdf">
                  <img class="h-auto max-w-full" src="/storage/images/TecNM.PNG" alt="Convocatoria">
                 </a>
            </div>
        </div> -->

    </AuthenticatedLayout>
</template>

<style>
    .card {
        position: relative;
        overflow: hidden;
    }

    .card img {
        width: 100%;
        height: auto;
        transition: transform 0.3s ease-out;
    }

    .card:hover img {
        transform: scale(1.1); /* Ajusta el valor según sea necesario para el efecto deseado */
        filter: brightness(1.2); /* Ajusta el valor para resaltar o sombrear la imagen */
    }
</style>
<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { Head } from "@inertiajs/vue3";
</script>

<template>
    <Head title="Acerca de" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Biblioteca del Tecnológico Superior de la Región Sierra
            </h2>
        </template>
        
        <div class="py-12 flex flex-col sm:flex-row">
    <div class="w-full max-w-lg mx-auto sm:px-6 lg:px-8 mb-2 sm:mb-0" style="margin-right: 2px;"> 
        <img class="w-full h-auto rounded-2xl" src="http://www.itss.edu.mx/site/paginas/202304/14/mision-vision.jpg" alt="Biblioteca">
    </div>

    <div class="w-full max-w-lg mx-auto sm:px-6 lg:px-0" style="margin-left: 2px;"> 
        <div class="bg-blue-950 overflow-hidden shadow-sm sm:rounded-lg p-4"> 
            <p class="text-lg text-gray-800">
                <p class="text-2xl font-extrabold text-white dark:text-white text-center">INFORMACIÓN</p>
                <p class="text1xl font-extrabold text-white dark:text-white">
                    <i class="fas fa-clock mr-2"></i> Horario
                    <p class="text-lg text text-white dark:text-white">8:00 am - 3:00 pm</p>
                    <p class="text-lg text text-white dark:text-white">Lunes a Viernes</p> <br>

                <p class="text1xl font-extrabold text-white dartext-white"></p>
                <i class="fas fa-envelope mr-2"></i> Correo</p>
                <p class="text-lg text text-white dark:text-white">Regionsierra@regionsierra.tecnm.mx</p>
                <p class="text-lg text text-white dark:text-white">Direccion@regionsierra.tecnm.mx</p>
            </p>
        </div>
    </div>
</div>


<div class="py-8 bg-blue-950 max-w-5xl mx-auto rounded-2xl flex flex-col lg:flex-row items-center">
    
    <div class="flex-shrink-0 m-6 lg:block hidden">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1158.3574928293397!2d-92.91165843206697!3d17.546098105548786!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85edba26af875131%3A0xc124cf73d391e65!2sTecNM%20Campus%20de%20la%20Region%20sierra!5e0!3m2!1ses!2smx!4v1701757482970!5m2!1ses!2smx"
            width="500" height="350" style="border: blue;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
        </iframe>
    </div>
    
    <div class="p-8 text-white mt-8 lg:mt-0 lg:ml-8 lg:mr-8">
        <h2 class="text-2xl font-semibold">
            <a href="https://maps.app.goo.gl/TEvuBpt6XDxdu6aW9" class="text-white">
                <i class="fas fa-map-marker-alt"></i> Dirección  </a>
        </h2> <br>
        <p>Carretera Teapa-Tacotalpa Km 4.5, </p>
        <p>Francisco Javier Mina, Teapa Tabasco C.P. </p>
        <p>86801.</p>
    </div>
</div>

    </AuthenticatedLayout>
    

</template>

<style scoped></style>

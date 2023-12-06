<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { Head } from "@inertiajs/vue3";
import Editor from "primevue/editor";
import Button from 'primevue/button';

const mostrarAlerta = () => {
  alert("Reporte enviado...");
};
</script>

<template>
    <Head title="Reportes" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Reportes semanales
            </h2>
        </template>

        <div class="py-6">
            <div class="container mx-auto flex px-44">
                <div class="left-side flex-1 p-6 bg-white border-r-2 border-white bg-blue-900 sm:rounded-lg">
                    <h1 class="font-semibold text-white">Circulo de Lectura: Frankenstein {{  }}</h1>
                    <h1 class="text-white pb-8 ">Reporte de la semana: 10-12-2023 </h1>

                    <textarea v-model="textoIntroducido" class="bg-slate-100 mt-4 p-2 w-full " rows="16" placeholder="Introduce tu texto aquí"></textarea>
                    
                    <button @click="mostrarAlerta" class="bg-slate-800 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full float-right mr-4 ">
                        Enviar
                    </button>
                </div>

                <!-- <div class="right-side flex-1 p-6 bg-blue-950 text-center lg:block hidden sm:rounded-lg ">
                    <img class="image" src="https://marketplace.canva.com/EADwi4xAG6I/1/0/256w/canva-monocromo-suspenso-bosque-foto-portada-de-libro-JBWCAd5q564.jpg" alt="Imagen de ejemplo">
                    <div class="text-left pl-12"> 
                        <h2 class="font-bold text-white">Reseña</h2>
                        <h1 class="text-white">
                            Aristócrata de nacimiento, vivió en la pobreza y el desenfreno
                            durante su juventud, pero sus excelentes dotes personales y
                            ambición lo llevarían a gobernar Roma en el siglo anterior al de
                            Cristo.
                        </h1>
                    </div>
                </div> -->
            </div>
        </div>
    </AuthenticatedLayout>
</template>


<style scoped>
.image {
  max-width: 100%;
  height: auto;
  display: block;
  margin: auto;
  margin-bottom: 1rem; 
}
.left-side{
    background: #172554;

}
.right-side{

    background: #172554;

}

</style>

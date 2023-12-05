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
        
        <div class="py-12">
            
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <a href="https://www.tecnm.mx/pdf/poesias/Comunicado-ViralicemosLectura.pdf">
                  <img class="h-auto max-w-full" src="/storage/images/TecNM.PNG" alt="Convocatoria">
                 </a>
            </div>
        </div>

       
    </AuthenticatedLayout>
</template>
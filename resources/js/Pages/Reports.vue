<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { Head } from "@inertiajs/vue3";
import Editor from "primevue/editor";

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
            <div class="max-w-8xl mx-auto sm:px-8 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg ">
                    <div class="p-6 text-gray-900 ">
                        <h1 class="font-semibold">Circulo de Lectura: Frankenstein {{  }}</h1>
                        <h1>Reporte de la semana: 10-12-2023 </h1>
                        <br>
                        
                        
                        <Editor v-model="value" editorStyle="height: 320px">
                            <template v-slot:toolbar>
                                <span class="ql-formats">
                                    <button v-tooltip.bottom="'Bold'" class="ql-bold"></button>
                                    <button v-tooltip.bottom="'Italic'" class="ql-italic"></button>
                                    <button v-tooltip.bottom="'Underline'" class="ql-underline"></button>
                                </span>
                            </template>
                        </Editor>
                        
                    </div>
                    <button class="bg-blue-950 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full float-right mr-4">
                        Enviar
                    </button>
                </div>
            </div>
        </div>

        
    </AuthenticatedLayout>
</template>

<style scoped></style>

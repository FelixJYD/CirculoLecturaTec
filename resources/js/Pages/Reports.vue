<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { Head } from "@inertiajs/vue3";
import Editor from "primevue/editor";
import Button from 'primevue/button';
import { useForm } from '@inertiajs/vue3'


const form = useForm({
  user_id: 1,
  book_id: 1,
  cont_report: null,
  remember: false,
});

const handleSubmit = () => {
  form.post('/reportes').then(() => {
    alert('Reporte enviado'); //Alerta que se ejecutara 
    //despues de que el reporte sea enviado exitosamente
  })
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
            <div class="container mx-auto flex px-20">
                <div class="left-side flex-1 p-6 bg-white border-r-2 border-white bg-blue-900 sm:rounded-lg">
                   
                    

                    <form @submit.prevent="form.post('/reportes')">
                        <input type="hidden" v-model="form.user_id">
                        <input type="hidden" v-model="form.book_id">
                        <textarea v-model="form.cont_report" class="bg-slate-100 mt-4 p-2 w-full " rows="16" placeholder="Introduce tu texto aquí"></textarea>

                    <button type="submit" class="bg-slate-800 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full float-right mr-4 ">
                        Enviar
                    </button>
                    </form>
                    
                </div>

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

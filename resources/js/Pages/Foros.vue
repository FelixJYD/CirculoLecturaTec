<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { Head } from "@inertiajs/vue3";
import {ref, onMounted} from 'vue';
const showAlert = () => {
  window.alert('Registro exitoso...');
};

const circles = ref([]);

defineProps({
  books:{
    type:Object
  }
})




</script >
<script>
  function mostrarAlerta() {
    var miAlerta = document.getElementById("miAlerta");
    miAlerta.style.display = "block";
  }
</script>

<template>
  <div>
    <Head title="Foros" />

    <AuthenticatedLayout>
      <template #header>
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          Foros disponibles...
          
        </h2>
      </template>

      <div class="container mx-auto p-16 flex flex-wrap">
        <div v-for="book in books" :key="book.index"
        class="card-content">
          <div class="max-w-sm w-full lg:max-w-full lg:flex mb-8">
            <div class="h-48 lg:h-auto lg:w-48 flex-none bg-cover rounded-t lg:rounded-t-none lg:rounded-l text-center overflow-hidden" 
            style="background-image: url('https://cdn-icons-png.flaticon.com/512/182/182956.png')" title="Woman holding a mug">
              </div>
            <div
              class="border-r border-b border-l border-gray-400 lg:border-l-0 lg:border-t lg:border-gray-400 bg-white rounded-b lg:rounded-b-none lg:rounded-r p-4 flex flex-col justify-between leading-normal"
            >
              <div class="mb-8">
                <p class="text-sm text-gray-600 flex items-center">
                  <svg
                    class="fill-current text-gray-500 w-3 h-3 mr-2"
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 20 20"
                  >
                    <path
                      d="M4 8V6a6 6 0 1 1 12 0v2h1a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-8c0-1.1.9-2 2-2h1zm5 6.73V17h2v-2.27a2 2 0 1 0-2 0zM7 6v2h6V6a3 3 0 0 0-6 0z"
                    />
                  </svg>
                  Members only
                </p>
                <div 
                class="text-gray-900 font-bold text-xl mb-2">
                 {{ book.name }}
                </div>
                <p 
                class="text-gray-700 text-base">
                  {{ book.description }}
                </p>
              </div>
              <div class="flex items-center">
                <div class="text-sm">

                  <button class="bg-blue-950 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full float-right mr-4" @click="showAlert">
                    + Unirse
                  </button>

               
                  
                </div>
              </div>
            </div>
          </div>
        </div>



        
      </div>
    </AuthenticatedLayout>
  </div>
</template>




<style scoped>
body {
    margin: 0;
    font-family: Arial, sans-serif;
}

.container {
    display: flex;
    flex: 1;
}

.main-section,
aside {
    flex: 1;
    padding: 20px;
    border: 1px solid #ccc;
}

aside {
    background-color: #f0f0f0;
}

.card {
    border: 1px solid #ccc;
    padding: 10px;
    margin: 10px 0;
    display: flex;
    align-items: center;
}

.card-content {
    width: 100%;
}

.card img {
    max-width: 50%;
    height: auto;
    margin: auto;
}
</style>

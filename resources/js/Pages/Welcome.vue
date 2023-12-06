<script setup>
import { Head, Link } from '@inertiajs/vue3';
import HomeLoyouts from '@/Layouts/HomeLoyouts.vue';

defineProps({
    canLogin: {
        type: Boolean,
    },
    canRegister: {
        type: Boolean,
    },
    laravelVersion: {
        type: String,
        required: true,
    },
    phpVersion: {
        type: String,
        required: true,
    },
});
</script>

<template>
    
<HomeLoyouts></HomeLoyouts>
    
</template>

<style>

body {
    background-color: #172554; 
  }

</style>
<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { Head } from "@inertiajs/vue3";
</script>

<template>
    <Head title="Acerca de" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Conoce mas sobre nosotros...
            </h2>
        </template>

        <h1>test about</h1>
    </AuthenticatedLayout>
</template>

<style scoped></style>

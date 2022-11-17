<script setup>
import WeatherCard from '@/Components/WeatherCard.vue';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/inertia-vue3';
</script>

<template>
    <Head title="Dashboard" />

    <AuthenticatedLayout>
        <div class="grid grid-cols-1 sm:grid-cols-2 divide-x gap-4 h-screen">
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 py-12">
                <WeatherCard />
                <WeatherCard />
                <WeatherCard />
                <WeatherCard />
                <WeatherCard />
                <WeatherCard />
                
            </div>
            <div class="px-4 text-center py-12">
                <div>cahrt</div>
                <div>cahrt</div>
                <div>cahrt</div>
                <div>cahrt  </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>

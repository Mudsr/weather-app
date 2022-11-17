<script setup>
import Chart from '@/Components/Chart.vue';
import WeatherCard from '@/Components/WeatherCard.vue';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/inertia-vue3';

const props = defineProps({ cities: Object})
</script>

<template>
    <Head title="Dashboard" />

    <AuthenticatedLayout>
        <div class="grid grid-cols-1 sm:grid-cols-2 divide-x gap-4">
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 py-12">
            <template v-for="city in cities">
                <WeatherCard :city="city" />
            </template>
            </div>
            <div class="px-4 text-center py-12">
                <Chart />
            </div>
        </div>
    </AuthenticatedLayout>
</template>

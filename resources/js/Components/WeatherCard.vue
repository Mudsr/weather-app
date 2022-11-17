<script setup>
const props = defineProps({city:Object})
</script>
<template>
    <div class="bg-[#736099] shadow rounded-2xl text-white p-4">
        <p class="text-xl font-bold">{{ city.name }}</p>
        <p class="text-sm ">{{ city.country?.iso }}</p>

        <div class="text-center space-y-2">
            <img :src="'images/icons/' +city.latest_weather.icon+'.png'" :alt="city.latest_weather.condition">

            <p class="text-2xl font-bold">{{ city.latest_weather.temperature }} <sup class="text-indigo-300">o</sup></p>
        </div>
    </div>
</template>

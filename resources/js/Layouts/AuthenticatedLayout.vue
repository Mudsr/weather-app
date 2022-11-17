<script setup>
import { ref } from 'vue';
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
import Dropdown from '@/Components/Dropdown.vue';
import DropdownLink from '@/Components/DropdownLink.vue';
import NavLink from '@/Components/NavLink.vue';
import ResponsiveNavLink from '@/Components/ResponsiveNavLink.vue';
import { Link } from '@inertiajs/inertia-vue3';

import { Disclosure, DisclosureButton, DisclosurePanel, Menu, MenuButton, MenuItem, MenuItems } from '@headlessui/vue'
import Sidebar from './Partials/Sidebar.vue';
import Nav from './Partials/Nav.vue';
// import { Bars3Icon, BellIcon, XMarkIcon } from '@heroicons/vue/24/outline'

const showingNavigationDropdown = ref(false);


const navigation = [
    { name: 'Dashboard', href: '#', current: true },
    { name: 'Team', href: '#', current: false },
    { name: 'Projects', href: '#', current: false },
    { name: 'Calendar', href: '#', current: false },
]

</script>

<template>

    <div class="flex flex-row min-h-screen">
        <Sidebar />

        <div class=" w-screen">
            <Nav />

            <main class="max-w-7xl mx-auto sm:px-6 lg:px-8 text-gray-700">
                <slot />
            </main>

        </div>
    </div>
</template>

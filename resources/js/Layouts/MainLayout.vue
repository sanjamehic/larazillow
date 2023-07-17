<template>
    <header class="border-b border-gray-200 dark:border-gray-700 bg-white dark:bg-gray-800 w-full">
        <div class="container mx-auto">
            <nav class="p-4 flex items-center justify-between">
                <div class="text-lg font-medium">
                    <Link :href="route('listing.index')">Main Page</Link>
                </div>
                <div class="text-xl text-indigo-600 dark:text-indigo-300">
                    <Link :href="route('listing.index')">LaraZillow</Link>
                </div>
                <div class="text-lg">
                    <Link :href="route('listing.create')" class="bg-indigo-600 hover:bg-indigo-500 text-white font-medium p-2 rounded-md">+ New Listing</Link>

                </div>
            </nav>
        </div>
    </header>

    <main class="container mx-auto p-4">
        <div v-if="flashSuccess" class="mb-4 borer rounded-md shadow-sm border-green-500 dark:bg-green-800 bg-green-50 p-2">
            {{ flashSuccess }}
        </div>
        <slot></slot>
    </main>


</template>
<script setup>
import { computed } from 'vue';
import { Link, usePage } from '@inertiajs/vue3';
import { ref } from 'vue';

//page.props.value.flash.success
const page = usePage()
const flashSuccess = computed(
    ()=>page.props.flash.success
)
</script>

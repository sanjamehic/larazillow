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
                    <div v-if="user" class="flex items-center gap-4">
                        <div class="text-gray-500 text-sm">{{ user.name }}</div>
                        <Link :href="route('listing.create')" class="btn-primary">+ New Listing</Link>
                        <div>
                            <Link :href="route('logout')" method="delete" as="button"> Logout</Link>
                        </div>
                    </div>
                    <div v-else>
                        <Link :href="route('login')">Sign In </Link>
                    </div>
                </div>
            </nav>
        </div>
    </header>

    <main class="container mx-auto p-4 w-full">
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

const user = computed(
    ()=> page.props.user
)
</script>

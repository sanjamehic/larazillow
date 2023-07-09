<template>

    <div>Index</div>
    <div>
        The message is {{ message }}
    </div>

</template>
<script setup>
import MainLayout from '../../Layouts/MainLayout.vue';
defineProps(['message'])
</script>

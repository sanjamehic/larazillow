<template>
    <form>
        <div class="mb-4 mt-4 flex flex-wrap gap-2">
            <div class="flex flex-nowrap items-center gap-2">
                <input v-model="filterForm.deleted"
                    id="deleted"
                    type="checkbox"
                    class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500" />
                <label for="deleted">Deleted</label>
            </div>
        </div>
    </form>

</template>
<script setup>
    import { reactive, watch } from 'vue';
    import { Inertia } from '@Inertiajs/inertia';
    import {debounce} from 'lodash'

    const filterForm = reactive({
        deleted: false,
    })
    //can be only reactive ref or computed
    watch(
        filterForm, debounce(()=> Inertia.get(
            route('realtor.listing.index'),
            filterForm,
            {preserveScroll:true, preserveState:true}
        ), 1000)
    )
    //loses reactivity when passed from reactive() to another function so it must be wrapped in getter function () =>
</script>

<template>
    <div class="flex gap-2 items-center">
        Show 
        <select v-model="pageSize" @change="search" class="border-[#0001] rounded-lg">
            <option v-for="item in pageSizeArray" :key="index" :value="item">{{ item }}</option>
        </select>
        Entries
    </div>
</template>

<script setup>
    import { onMounted } from 'vue'
    import useTable from '@/Components/Backend/Global/Table/useTable.js'
    
    const { pageSize, pageSizeArray, search, hasPagination } = useTable()
    defineProps({
        defaultPageSize: [Number, String],
    })

    onMounted(() => {
        hasPagination.value = true
    })
</script>
<template>
    <div class="flex items-center justify-between mt-5 text-sm">
        <div class="">
            Showing {{ from + 1 }} to {{ to }} 
            of {{ result.length }} entries
        </div>
        <div class="flex gap-2 items-center">
            <button>
                <AngleLeftIcon @click="() => { handleResult(-1) }" class="w-4 h-4" />
            </button>
            {{ currentPageNumber }} / {{ totalPage }}
            <button>
                <AngleRightIcon @click="() => { handleResult(+1) }" class="w-4 h-4" />
            </button>
        </div>
    </div>
</template>

<script setup>
import { computed, onMounted } from 'vue';
import AngleLeftIcon from '@/Icons/AngleLeftIcon.vue'
import AngleRightIcon from '@/Icons/AngleRightIcon.vue'
import useTable from '@/Components/Backend/Global/Table/useTable.js'

const { result, resultPerPage, pageSize, currentPageNumber, totalPage, hasPagination } = useTable()


const from = computed(() => {
    return ((Number(currentPageNumber.value) - 1)  * Number(pageSize.value))
})

const to = computed(() => {
    let toResult = (Number(currentPageNumber.value)  * Number(pageSize.value))
    toResult = (toResult > result.value.length) ? result.value.length : toResult
    return toResult
})

const handleResult = (direction) => {
    if( currentPageNumber.value > 1 && direction < 0){
        currentPageNumber.value--
    }else if(currentPageNumber.value < totalPage.value && direction > 0){
        currentPageNumber.value++
    }else{
        return
    }
    
    resultPerPage.value = result.value.slice(from.value, to.value)
}

onMounted(() => {
    hasPagination.value = true
})
</script>
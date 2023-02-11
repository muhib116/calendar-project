<template>
    <div class="flex items-center justify-between mt-5 text-sm">
        <div class="">
            Showing {{ from }} to {{ to }} 
            of {{ result.length }} entries
        </div>
        <div class="flex gap-2 items-center">
            <button>
                <AngleLeftIcon @click="() => { handleResult(-1) }" class="w-4 h-4" />
            </button>
            {{ pageNumber }} / {{ totalPage }}
            <button>
                <AngleRightIcon @click="() => { handleResult(+1) }" class="w-4 h-4" />
            </button>
        </div>
    </div>
</template>

<script setup>
import { computed } from 'vue';
import AngleLeftIcon from '@/Icons/AngleLeftIcon.vue'
import AngleRightIcon from '@/Icons/AngleRightIcon.vue'
import useTable from '@/Components/Backend/Global/Table/useTable.js'

const { result, resultPerPage, pageSize, pageNumber, totalPage } = useTable()

const from = computed(() => {
    return (pageSize.value * (pageNumber.value - 1))
})

const to = computed(() => {
    let toResult = (Number(pageNumber.value)  * Number(pageSize.value)) - 1
    // toResult = toResult > result.value.length ? result.value.length : toResult
    return toResult
})

const handleResult = (direction) => {
    if( pageNumber.value > 1 && direction < 0){
        pageNumber.value--
        resultPerPage.value = result.value.slice(from.value-1, to.value)
    }

    console.log(from.value, to.value);
    
    if(pageNumber.value < totalPage.value && direction > 0){
        pageNumber.value++
        resultPerPage.value = result.value.slice(from.value-1, to.value)
    }
}
</script>
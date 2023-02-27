<template>
    <div class="bg-red-100 h-full relative">
        <img
            class="block h-full w-full object-cover object-center"
            src="https://images.unsplash.com/photo-1673762482215-33acd768cb46?ixlib=rb-4.0.3&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=2250&amp;q=80">
        <h2 class="absolute bottom-0 p-4 bg-white w-full bg-opacity-50 backdrop-blur-md font-semibold truncate">
            {{ Helper.translate('Calendar Name') }}
        </h2>
    </div> 
</template>

<script setup>
import Helper from '@/Helper'
defineProps({
    calendar: Object
})
</script>

<style lang="scss" scoped>

</style>
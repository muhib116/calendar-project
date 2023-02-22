<template>
    <slot></slot>
</template>

<script setup>
import { watch } from 'vue'
import { usePage } from '@inertiajs/inertia-vue3'
import { toast } from 'vue3-toastify'

watch(usePage().props, (props) => {
    if(props.flash.message){
        toast.success(props.flash.message)
    }
    if(props.flash.error){
        toast.error(props.flash.error)
    }
}, {deep: true})
</script>

<style lang="scss" scoped>

</style>
<template>
    <div 
        @click.self="$emit('update:modelValue', false)"
        class="fixed top-0 left-0 right-0 bottom-0 bg-black bg-opacity-50 z-100 grid place-content-center transition-all" 
        :class="modelValue ? 'opacity-100 visible' : 'opacity-0 invisible'"
    >
        <div class="max-h-[90vh] overflow-y-auto bg-white p-10 shadow">
            <slot></slot>
        </div>
    </div>
</template>

<script setup>
    const props = defineProps({
        modelValue: Boolean
    })
    
</script>

<style lang="scss" scoped>

</style>
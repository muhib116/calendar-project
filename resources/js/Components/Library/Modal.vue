<template>
    <div 
        @click.self="$emit('update:modelValue', false)"
        class="fixed top-0 left-0 right-0 bottom-0 z-50 bg-black bg-opacity-50 backdrop-blur-md z-100 grid place-content-center transition-all" 
        :class="modelValue ? 'opacity-100 visible' : 'opacity-0 invisible'"
    >
        <div class="max-h-[90vh] overflow-y-auto">
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
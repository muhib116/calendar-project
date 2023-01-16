<template>
    <label class="relative block">
        <span v-if="isEmpty(modelValue)" class="absolute left-0 top-3 opacity-40">{{ placeholder }}</span>
        <input @input="updateValue" :type="type" class="myInput border border-none focus:outline-none px-0 py-3 block w-full remove-shadow">
        <span class="customBorder"></span>
    </label>
</template>

<script setup>
    import { isEmpty } from 'lodash'
    defineProps({
        type: 'String',
        placeholder: 'String',
        modelValue: String
    })

    const emit = defineEmits()
    const updateValue = (e) => {
        emit('update:modelValue', e.target.value)
    }
</script>

<style scoped>
.customBorder{
    display: block;
    border-bottom: 1px solid #0002;
    position: relative;
}
.customBorder::before{
    content: '';
    position: absolute;
    bottom: 0;
    left: 0;
    width: 0px;
    border-bottom: 1px solid red;
    transition: 0.3s ease-in-out;
}

.myInput:focus + .customBorder::before{
    width: 100%;
}
.remove-shadow{
    box-shadow: none;
}
</style>
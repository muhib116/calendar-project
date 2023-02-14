<template>
    <label class="relative block" :class="disabled && 'pointer-events-none opacity-70'">
        <span v-if="isEmpty(modelValue)" class="absolute left-0 top-3 pointer-events-none opacity-40 whitespace-nowrap">{{ placeholder }}</span>
        <input @input="updateValue" :value="modelValue" :type="type" :disabled="disabled" class="myInput border border-none focus:outline-none px-0 py-3 block w-full remove-shadow bg-transparent">
        <span class="customBorder"></span>
        <div 
            v-if="characterLimit"
            class="limit block text-right mt-1 italic text-xs"
            :class="(writtenCharacter >= characterLimit) && 'text-red-500 font-bold text-md'"
        >
           {{ writtenCharacter }}/{{ characterLimit }}
        </div>
    </label>
</template>

<script setup>
    import { isEmpty } from 'lodash'
    import { ref } from 'vue'
    
    const props = defineProps({
        type: String,
        placeholder: String,
        characterLimit: Number,
        disabled: {
            type: [Boolean, String],
            default: false,
        },
        modelValue: {
            type: String,
            default: ''
        },
        disabled: {
            type: Boolean,
            default: false
        }
    })

    const writtenCharacter = ref(0)
    const emit = defineEmits()
    const updateValue = (e) => {
        let value = e.target.value
        writtenCharacter.value = value.length
        if(value.length >= props.characterLimit){
            e.target.value = value.slice(0, (props.characterLimit - 1))
        }
        emit('update:modelValue', value)
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
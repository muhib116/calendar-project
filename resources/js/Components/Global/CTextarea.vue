<template>
    <label class="relative block">
        <span v-if="!writtenCharacter" class="absolute left-0 top-3 opacity-40">{{ placeholder }}</span>
        <textarea 
            :rows="rows"
            @input="updateValue" 
            class="myInput border border-none focus:outline-none px-0 py-3 block w-full remove-shadow"
        ></textarea>
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
    import { ref } from 'vue'
    
    const props = defineProps({
        placeholder: String,
        characterLimit: Number,
        modelValue: String,
        rows: [Number, String]
    })

    const writtenCharacter = ref(0)

    const emit = defineEmits()
    const updateValue = (e) => {
        let value = e.target.value
        writtenCharacter.value = value.length
        if(value.length >= props.characterLimit){
            e.target.value = value.slice(0, (props.characterLimit - 1))
        }
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
<template>
    <div class="max-w-[800px] bg-white relative mx-auto">
        <div class="px-4 py-4 border-b font-bold">Send Reply</div>
        <div class="p-4">
            <h1 class="font-semibold mb-1">
                {{ Helper.translate('Name') }}: {{ Helper.translate(item.name, true) }}
            </h1>
            <h2 class="font-semibold mb-1">
                {{ Helper.translate('Email') }}: {{ Helper.translate(item.email, true) }}
            </h2>
            <h2 class="font-semibold mb-3 border-b pb-3">Subject: {{ item.subject }}</h2>

            <h2 class="font-semibold mb-1">{{ Helper.translate('Message') }}: </h2>
            <p class="">
                {{ item.message }}
            </p>
        </div>
        <div class="p-4">
            <textarea placeholder="Write Reply" class="border border-gray-400 block w-full row-4 border-opacity-20 p-4" />
            <div class="flex justify-end gap-4 mt-4">
                <button @click="$emit('close')" class="px-4 py-1 bg-red-500 rounded block font-bold text-white">
                    {{ Helper.translate('Cancel') }}
                </button>
                <button class="px-4 py-1 bg-green-500 rounded block font-bold text-white">
                    {{ Helper.translate('Reply') }}
                </button>
            </div>
        </div>
    </div>
</template>

<script setup>
import Helper from '@/Helper.js'

defineProps({
    item: Object
})
</script>
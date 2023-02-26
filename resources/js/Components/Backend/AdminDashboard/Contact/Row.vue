<template>
    <tr class="border-b" :class="item.seen && 'font-semibold'">
        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
            {{ Helper.translate(index+1, true) }}
        </td>
        <td class="text-sm text-gray-900 px-6 py-4 whitespace-nowrap">
            {{ Helper.dateFormate(item.created_at) }}
        </td>
        <td class="text-sm text-gray-900 px-6 py-4 whitespace-nowrap">
            {{ Helper.translate(item.name, true) }}
        </td>
        <td class="text-sm text-gray-900 px-6 py-4 whitespace-nowrap">
            {{ Helper.translate(item.subject, true) }}
        </td>
        <td class="text-sm text-gray-900 px-6 py-4 whitespace-nowrap">
            {{ Helper.translate(item.email, true) }}
        </td>
        <td class="text-sm text-gray-900 px-6 py-4 whitespace-nowrap flex justify-end gap-2">
            <button @click="showReplayModal = true" class="bg-green-500 px-2 py-1 rounded text-white text-sm font-bold block">
                <EyeIcon class="w-4 h-4" />
            </button>
            <button @click="showReplayModal = true" class="bg-sky-500 px-2 py-1 rounded text-white text-sm font-bold block">
                <ReplayIcon class="w-4 h-4" />
            </button>
            <button class="bg-red-500 px-2 py-1 rounded text-white text-sm font-bold block">
                <CloseIcon class="w-4 h-4" />
            </button>
        </td>
    </tr>
    <Modal v-model="showReplayModal">
        Hello world
    </Modal>
</template>

<script setup>
import { ref } from 'vue'
import Helper from '@/Helper.js'
import CloseIcon from '@/Icons/CloseIcon.vue'
import ReplayIcon from '@/Icons/ReplayIcon.vue'
import EyeIcon from '@/Icons/EyeIcon.vue'
import Modal from '@/Components/Modal.vue'

defineProps({
    item: Object,
    index: [String, Number]
})

const showReplayModal = ref(true)
</script>
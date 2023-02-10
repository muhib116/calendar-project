<template>
    <div class="flex items-center justify-between mt-5 text-sm">
        <div class="">Showing 1 to 10 of 10 entries</div>
        <div class="flex gap-2 items-center">
            <button>
                <AngleLeftIcon class="w-4 h-4" />
            </button>
            1/2
            <button>
                <AngleRightIcon class="w-4 h-4" />
            </button>
        </div>
    </div>
</template>

<script setup>
import AngleLeftIcon from '@/Icons/AngleLeftIcon.vue'
import AngleRightIcon from '@/Icons/AngleRightIcon.vue'
</script>
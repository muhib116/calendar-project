<template>
    <div class='grid gap-1'>
        <button @click="showDropdown = !showDropdown" 
            class='flex justify-between items-center w-full px-6 py-2 border-b border-opacity-5 font-semibold text-black text-opacity-80 hover:text-opacity-100 hover:text-[orangered]'
        >
            <Link :href="href">
                {{ label }}
            </Link>
            <svg class='w-3 h-3 transition-transform duration-200' :class="showDropdown ? 'rotate-180' : ''" width="32" height="32" viewBox="0 0 32 32" fill='currentColor'><path d="M4.219 10.781 2.78 12.22l12.5 12.5.719.687.719-.687 12.5-12.5-1.438-1.438L16 22.562Z"/></svg>
        </button>
        <div v-if="showDropdown" class='grid text-left pl-4 text-md bg-white bg-opacity-5'>
            <slot></slot>
        </div>
    </div>
</template>

<script setup>
    import { Link } from '@inertiajs/inertia-vue3';
import { ref } from 'vue'
    const showDropdown = ref(false)
    defineProps({
        label: String,
        href: {
            type: String,
            default: '',
        }
    })
</script>
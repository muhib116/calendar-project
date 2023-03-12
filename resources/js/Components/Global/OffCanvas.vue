<template>
    <div class="fixed top-0  w-[400px] h-[100vh] bg-white z-20 transition-all -left-full shadow" :class="modelValue && '-left-0'">
        <div class="flex justify-between flex-col h-full overflow-y-auto">
            <div>
                <div class="flex justify-between border-b py-3  px-6 bg-[orangered] text-white">
                    <h1 class="uppercase font-bold">{{ Helper.translate('Menu') }}</h1>
                    <button @click="$emit('update:modelValue', false)">
                        <svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path fill="none" stroke="currentColor" stroke-width="2" d="m7 7 10 10M7 17 17 7" />
                        </svg>
                    </button>
                </div>

                <div class="nav grid py-6"> 
                    <template v-for="(category, index) in parentCategories" :key="index">
                        <CategoryDropdown 
                            :label="Helper.translate(category.name, true)"
                            :href="route('category.items',category.slug)"
                            v-if="!isEmpty(getCategoryChild(category.id))"
                        >
                            <template v-for="(sub_category, index) in getCategoryChild(category.id)" :key="index">
                                <Link :href="route('category.items',sub_category.slug)" @click="$emit('update:modelValue', false)" class="px-6 py-2 border-b border-opacity-5 font-semibold text-black text-opacity-80 hover:text-opacity-100 hover:text-[orangered]">
                                    {{ Helper.translate(sub_category.name, true) }}
                                </Link>
                            </template>
                        </CategoryDropdown>
                        <Link v-else :href="route('category.items',category.slug)" @click="$emit('update:modelValue', false)" class="px-6 py-2 border-b border-opacity-5 font-semibold text-black text-opacity-80 hover:text-opacity-100 hover:text-[orangered]">
                            {{ Helper.translate(category.name, true) }}
                        </Link>
                    </template>
                </div>
            </div>

            <footer class="flex flex-wrap bg-[var(--footer-bg-color)] text-white py-2">
                <a href="#" class="capitalize px-6 py-1 text-sm">{{ Helper.translate('Languages') }}</a>
                <a href="#" class="capitalize px-6 py-1 text-sm">{{ Helper.translate('Signup') }}</a>
                <a href="#" class="capitalize px-6 py-1 text-sm">{{ Helper.translate('Become a talent') }}</a>
            </footer>
        </div>
    </div>
</template>

<script setup>
import { Link } from '@inertiajs/inertia-vue3';
import Helper from '@/Helper';
import CategoryDropdown from './CategoryDropdown.vue';
import { isEmpty } from 'lodash';
defineProps({
    modelValue: {
        type: Boolean,
        default: true
    }
})
</script>

<style lang="scss" scoped>

</style>
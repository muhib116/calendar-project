<template>
    <GlobalLayout>
        <div>
            <Header v-if="header" />
            <div class="min-h-[89vh] pt-5">
                <slot></slot>
            </div>
            <Footer v-if="footer" />
        </div>
    </GlobalLayout>
</template>

<script setup>
import Header from '@/Components/Backend/Global/Header.vue'
import Footer from '@/Components/Backend/Global/Footer.vue'
import GlobalLayout from '@/Layouts/GlobalLayout.vue';

defineProps({
    header: {
        type: Boolean,
        default: true
    },
    footer: {
        type: Boolean,
        default: true
    }
})
</script>
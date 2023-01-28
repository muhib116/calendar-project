<template>
    <div>
        <Header v-if="header" />
        <div class="min-h-[85.46vh]">
            <slot></slot>
        </div>
        <Footer v-if="footer" />
    </div>
</template>

<script setup>
    import Header from '@/Components/Backend/Global/Header.vue'
    import Footer from '@/Components/Backend/Global/Footer.vue'

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

<style lang="scss" scoped>

</style>
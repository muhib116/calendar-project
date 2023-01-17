<template>
    <div>
        <Header />
        <div class="min-h-[85.46vh]">
            <slot></slot>
        </div>
        <Footer />
    </div>
</template>

<script setup>
    import Header from '@/Components/Backend/Global/Header.vue'
    import Footer from '@/Components/Backend/Global/Footer.vue'
</script>

<style lang="scss" scoped>

</style>
<template>
    <header class="bg-[var(--header-bg-color)] text-white px-4 py-4 sticky top-0">
        <div class="navWrapper container mx-auto text-white items-center">
            <Navigation class="w-10" />

            <div class="grid text-center gap-2">
                <a href="#" class="logo font-black text-2xl uppercase whitespace-nowrap">Demo Logo</a>
            </div>

            <div class="flex gap-4 items-center justify-end">
                <Notification />
                <Profile />
            </div>

        </div>
    </header>
</template>

<script setup>
    import Navigation from '@/Components/Backend/Global/Components/Navigation.vue'
    import Notification from '@/Components/Backend/Global/Components/Notification.vue'
    import Profile from '@/Components/Backend/Global/Components/Profile.vue'
</script>

<style scoped>
    .navWrapper{
        display: grid;
        grid-template-columns: 100px 1fr 100px;
    }

    @media all and (max-width: 480px){
        .navWrapper{
            display: grid;
            grid-template-columns: 50px 1fr 120px;
        }
        .logo{
            font-size: 20px;
        }
    }
</style>
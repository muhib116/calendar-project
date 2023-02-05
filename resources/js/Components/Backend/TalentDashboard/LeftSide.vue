<template>
    <div class="grid gap-3 sticky top-24">
        <Link 
            class="px-4 py-2 border font-semibold hover:bg-gray-100"
            :class="route().current('talent.dashboard') ? 'bg-gray-100' : ''"
            :href="route('talent.dashboard')"
        >
            Guide
        </Link>
        <Link 
            class="px-4 py-2 border font-semibold hover:bg-gray-100"
            :class="route().current('talent.account') ? 'bg-gray-100' : ''"
            :href="route('talent.account')"
        >
            Account
        </Link>
        <Link 
            class="px-4 py-2 border font-semibold hover:bg-gray-100"
            :class="route().current('talent.profile.setup') ? 'bg-gray-100' : ''"
            :href="route('talent.profile.setup')"
        >
            Profile Setup
        </Link>
        <Link 
            class="px-4 py-2 border font-semibold hover:bg-gray-100"
            :class="route().current('talent.tips') ? 'bg-gray-100' : ''"
            :href="route('talent.tips')"
        >
            Tips
        </Link>
        <Link 
            class="px-4 py-2 border font-semibold hover:bg-gray-100"
            :class="route().current('talent.myLife') ? 'bg-gray-100' : ''"
            :href="route('talent.myLife')"
        >
            My Life
        </Link>
        <Link 
            class="px-4 py-2 border font-semibold hover:bg-gray-100"
        >
            Calendar
        </Link>
        <Link 
            class="px-4 py-2 border font-semibold hover:bg-gray-100"
            :class="route().current('talent.wish.request') ? 'bg-gray-100' : ''"
            :href="route('talent.wish.request')"
        >
            Wish Request
        </Link>
        <Link 
            class="px-4 py-2 border font-semibold hover:bg-gray-100"
            :class="route().current('talent.analytics') ? 'bg-gray-100' : ''"
            :href="route('talent.analytics')"
        >
            Analytics
        </Link>
        <Link 
            class="px-4 py-2 border font-semibold hover:bg-gray-100"
            :class="route().current('talent.payout') ? 'bg-gray-100' : ''"
            :href="route('talent.payout')"
        >
            Payout
        </Link>
    </div>
</template>

<script setup>
    import { Link } from '@inertiajs/inertia-vue3';
</script>

<style lang="scss" scoped>

</style>
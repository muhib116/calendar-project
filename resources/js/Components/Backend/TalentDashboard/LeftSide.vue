<template>
    <div class="grid gap-3 sticky top-24">
        <Link 
            class="px-4 py-2 border font-semibold hover:bg-gray-100"
            :class="route().current('talent-dashboard.guide') ? 'bg-gray-100' : ''"
            :href="route('talent-dashboard.guide')"
        >
            Guide
        </Link>
        <Link 
            class="px-4 py-2 border font-semibold hover:bg-gray-100"
            :class="route().current('talent-dashboard.account') ? 'bg-gray-100' : ''"
            :href="route('talent-dashboard.account')"
        >
            Account
        </Link>
        <Link 
            class="px-4 py-2 border font-semibold hover:bg-gray-100"
            :class="route().current('talent-dashboard.profile.setup') ? 'bg-gray-100' : ''"
            :href="route('talent-dashboard.profile.setup')"
        >
            Profile Setup
        </Link>
        <Link 
            class="px-4 py-2 border font-semibold hover:bg-gray-100"
            :class="route().current('talent-dashboard.tips') ? 'bg-gray-100' : ''"
            :href="route('talent-dashboard.tips')"
        >
            Tips
        </Link>
        <Link 
            class="px-4 py-2 border font-semibold hover:bg-gray-100"
            :class="route().current('talent-dashboard.myLife') ? 'bg-gray-100' : ''"
            :href="route('talent-dashboard.myLife')"
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
            :class="route().current('talent-dashboard.wish.request') ? 'bg-gray-100' : ''"
            :href="route('talent-dashboard.wish.request')"
        >
            Wish Request
        </Link>
        <Link 
            class="px-4 py-2 border font-semibold hover:bg-gray-100"
            :class="route().current('talent-dashboard.analytics') ? 'bg-gray-100' : ''"
            :href="route('talent-dashboard.analytics')"
        >
            Analytics
        </Link>
        <Link 
            class="px-4 py-2 border font-semibold hover:bg-gray-100"
            :class="route().current('talent-dashboard.payout') ? 'bg-gray-100' : ''"
            :href="route('talent-dashboard.payout')"
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
<template>
    <div class="grid gap-2 sticky top-24">
        <Link 
            class="px-4 py-2 border font-semibold hover:bg-gray-100"
            :class="route().current('account2.guid') ? 'bg-gray-100' : ''"
            :href="route('account2.guid')"
        >
            Guid
        </Link>
        <Link 
            class="px-4 py-2 border font-semibold hover:bg-gray-100"
            :class="route().current('account2.account') ? 'bg-gray-100' : ''"
            :href="route('account2.account')"
        >
            Account
        </Link>
        <Link 
            class="px-4 py-2 border font-semibold hover:bg-gray-100"
            :class="route().current('account2.profile.setup') ? 'bg-gray-100' : ''"
            :href="route('account2.profile.setup')"
        >
            Profile Setup
        </Link>
        <Link 
            class="px-4 py-2 border font-semibold hover:bg-gray-100"
            :class="route().current('account2.tips') ? 'bg-gray-100' : ''"
            :href="route('account2.tips')"
        >
            Tips
        </Link>
        <Link 
            class="px-4 py-2 border font-semibold hover:bg-gray-100"
            :class="route().current('account2.myLife') ? 'bg-gray-100' : ''"
            :href="route('account2.myLife')"
        >
            My Life
        </Link>
        <Link 
            class="px-4 py-2 border font-semibold hover:bg-gray-100"
            :class="route().current('account2.wish.request') ? 'bg-gray-100' : ''"
            :href="route('account2.wish.request')"
        >
            Wish Request
        </Link>
        <Link 
            class="px-4 py-2 border font-semibold hover:bg-gray-100"
            :class="route().current('account2.analytics') ? 'bg-gray-100' : ''"
            :href="route('account2.analytics')"
        >
            Analytics
        </Link>
        <Link 
            class="px-4 py-2 border font-semibold hover:bg-gray-100"
            :class="route().current('account2.payout') ? 'bg-gray-100' : ''"
            :href="route('account2.payout')"
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
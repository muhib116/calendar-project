<template>
    <div class="grid gap-2">
        <Link 
            class="px-4 py-2 border font-semibold hover:bg-gray-100"
            :class="route().current('guid') ? 'bg-gray-100' : ''"
            :href="route('guid')"
        >
            Guid
        </Link>
        <Link 
            class="px-4 py-2 border font-semibold hover:bg-gray-100"
            :class="route().current('account') ? 'bg-gray-100' : ''"
            :href="route('account')"
        >
            Account
        </Link>
        <Link 
            class="px-4 py-2 border font-semibold hover:bg-gray-100"
            :class="route().current('following') ? 'bg-gray-100' : ''"
            :href="route('following')"
        >
            Following
        </Link>
        <Link 
            class="px-4 py-2 border font-semibold hover:bg-gray-100"
            :class="route().current('subscription') ? 'bg-gray-100' : ''"
            :href="route('subscription')"
        >
            Subscription
        </Link>
        <Link 
            class="px-4 py-2 border font-semibold hover:bg-gray-100"
            :class="route().current('history') ? 'bg-gray-100' : ''"
            :href="route('history')"
        >
            History
        </Link>
    </div>
</template>

<script setup>
    import { Link } from '@inertiajs/inertia-vue3';
</script>

<style lang="scss" scoped>

</style>
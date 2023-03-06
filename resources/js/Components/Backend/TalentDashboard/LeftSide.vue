<template>
    <div class="grid gap-3 sticky top-24">
        <Link 
            class="px-4 py-2 border font-semibold hover:bg-gray-100"
            :class="route().current('talent.dashboard') ? 'bg-gray-100' : ''"
            :href="route('talent.dashboard')"
        >
            {{ Helper.translate('Guide') }}
        </Link>
        <Link 
            class="px-4 py-2 border font-semibold hover:bg-gray-100"
            :class="route().current('talent.account') ? 'bg-gray-100' : ''"
            :href="route('talent.account')"
        >
            {{ Helper.translate('Account') }}
        </Link>
        <Link 
            class="px-4 py-2 border font-semibold hover:bg-gray-100"
            :class="route().current('talent.profile.setup') ? 'bg-gray-100' : ''"
            :href="route('talent.profile.setup')"
        >
            {{ Helper.translate('Profile Setup') }}
        </Link>
        <Link 
            class="px-4 py-2 border font-semibold hover:bg-gray-100"
            :class="route().current('talent.tips') ? 'bg-gray-100' : ''"
            :href="route('talent.tips')"
        >
            {{ Helper.translate('Tips') }}
        </Link>
        <Link 
            class="px-4 py-2 border font-semibold hover:bg-gray-100"
            :class="route().current('talent.myLife') ? 'bg-gray-100' : ''"
            :href="route('talent.myLife')"
        >
            {{ Helper.translate('My Life') }}
        </Link>
        <Link :href="route('my_calendars')"
            class="px-4 py-2 border font-semibold hover:bg-gray-100"
        >
            {{ Helper.translate('Calendars') }}
        </Link>
        <Link 
            class="px-4 py-2 border font-semibold hover:bg-gray-100"
            :class="route().current('talent.wish.request') ? 'bg-gray-100' : ''"
            :href="route('talent.wish.request')"
        >
            {{ Helper.translate('Wish Request') }}
        </Link>
        <Link 
            class="px-4 py-2 border font-semibold hover:bg-gray-100"
            :class="route().current('talent.analytics') ? 'bg-gray-100' : ''"
            :href="route('talent.analytics')"
        >
            {{ Helper.translate('Analytics') }}
        </Link>
        <Link 
            class="px-4 py-2 border font-semibold hover:bg-gray-100"
            :class="route().current('talent.payout') ? 'bg-gray-100' : ''"
            :href="route('talent.payout')"
        >
            {{ Helper.translate('Payout') }}
        </Link>
    </div>
</template>

<script setup>
import Helper from '@/Helper'
import { Link } from '@inertiajs/inertia-vue3'
</script>

<style lang="scss" scoped>

</style>
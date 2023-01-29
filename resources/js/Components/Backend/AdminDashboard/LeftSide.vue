<template>
    <div class="grid gap-10 sticky top-10">
        <div class="grid gap-2">
            <Link 
                class="px-4 py-1 border font-semibold border-sky-500 hover:bg-sky-500 hover:text-white rounded"
                :class="route().current('admin.dashboard') ? 'bg-sky-500 text-white' : ''"
                :href="route('admin.dashboard')"
            >
                Dashboard
            </Link>
            <Link 
                class="px-4 py-1 border font-semibold border-sky-500 hover:bg-sky-500 hover:text-white rounded"
                :class="route().current('admin.dashboard.analytics') ? 'bg-sky-500 text-white' : ''"
                :href="route('admin.dashboard.analytics')"
            >
                Analytics
            </Link>
            <Link 
                class="px-4 py-1 border font-semibold border-sky-500 hover:bg-sky-500 hover:text-white rounded"
                :class="route().current('admin.dashboard.payments') ? 'bg-sky-500 text-white' : ''"
                :href="route('admin.dashboard.payments')"
            >
                Payments
            </Link>
        </div>

        <div class="grid gap-2">
            <Link 
                class="px-4 py-1 border font-semibold hover:bg-[#130121] hover:text-white rounded relative"
                :class="route().current('admin.dashboard.talent.applications') ? 'bg-[#130121] text-white' : ''"
                :href="route('admin.dashboard.talent.applications')"
            >
                T-Applications
                <span class="text-[10px] bg-red-400 w-6 h-6 flex items-center justify-center rounded-full text-white absolute top-0 right-0 transform translate-x-1/2 -translate-y-1/2">
                    50
                </span>
            </Link>
            <Link 
                class="px-4 py-1 border font-semibold hover:bg-[#130121] hover:text-white rounded relative"
                :class="route().current('admin.dashboard.users') ? 'bg-[#130121] text-white' : ''"
                :href="route('admin.dashboard.users')"
            >
                Users
            </Link>
            <Link 
                class="px-4 py-1 border font-semibold hover:bg-[#130121] hover:text-white rounded relative"
                :class="route().current('admin.dashboard.talents') ? 'bg-[#130121] text-white' : ''"
                :href="route('admin.dashboard.talents')"
            >
                Talents
            </Link>
            <Link 
                class="px-4 py-1 border font-semibold hover:bg-[#130121] hover:text-white rounded relative"
                :class="route().current('admin.dashboard.categories') ? 'bg-[#130121] text-white' : ''"
                :href="route('admin.dashboard.categories')"
            >
                Categories
            </Link>
            <Link 
                class="px-4 py-1 border font-semibold hover:bg-[#130121] hover:text-white rounded relative"
                :class="route().current('admin.dashboard.countries') ? 'bg-[#130121] text-white' : ''"
                :href="route('admin.dashboard.countries')"
            >
                Countries
            </Link>
            <Link 
                class="px-4 py-1 border font-semibold hover:bg-[#130121] hover:text-white rounded relative"
                :class="route().current('admin.dashboard.countries') ? 'bg-[#130121] text-white' : ''"
                :href="route('admin.dashboard.countries')"
            >
                Settings
            </Link>
        </div>
        <div class="grid gap-2">
            <button class="px-4 py-1 border font-semibold bg-orange-500 text-white rounded relative">
                Send Emails
            </button>
            <button class="px-4 py-1 border font-semibold bg-red-500 text-white rounded relative">
                Logout
            </button>
        </div>
    </div>
</template>

<script setup>
    import { Link } from '@inertiajs/inertia-vue3';
</script>

<style scoped>

</style>
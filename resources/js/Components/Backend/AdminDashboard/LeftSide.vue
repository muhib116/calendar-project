<template>
    <div class="grid gap-10 sticky top-10">
        <div class="grid gap-2">
            <Link 
                class="px-4 py-1 border font-semibold text-gray-400 rounded"
                :class="route().current('admin.dashboard') ? 'bg-sky-500 text-gray-50' : ''"
                :href="route('admin.dashboard')"
            >
                {{ Helper.translate('Dashboard') }}
            </Link>
            <Link 
                class="px-4 py-1 border font-semibold text-gray-400 rounded"
                :class="route().current('admin.analytics') ? 'bg-sky-500 text-gray-50' : ''"
                :href="route('admin.analytics')"
            >
                {{ Helper.translate('Analytics') }}
            </Link>
            <Link 
                class="px-4 py-1 border font-semibold text-gray-400 rounded"
                :class="route().current('admin.payments') ? 'bg-sky-500 text-gray-50' : ''"
                :href="route('admin.payments')"
            >
                {{ Helper.translate('Payments') }}
            </Link>
        </div>

        <div class="grid gap-2">
            <Link 
                class="px-4 py-1 border font-semibold hover:bg-[#130121] hover:text-white rounded relative"
                :class="route().current('admin.talent.applications') ? 'bg-[#130121] text-white' : ''"
                :href="route('admin.talent.applications')"
            >
                {{ Helper.translate('T-Applications') }}
                <span class="text-[10px] bg-red-400 w-6 h-6 flex items-center justify-center rounded-full text-white absolute top-0 right-0 transform translate-x-1/2 -translate-y-1/2">
                    50
                </span>
            </Link>
            <Link 
                class="px-4 py-1 border font-semibold hover:bg-[#130121] hover:text-white rounded relative"
                :class="route().current('admin.users') || route().current('admin.user.detail') ? 'bg-[#130121] text-white' : ''"
                :href="route('admin.users')"
            >
                {{ Helper.translate('Users') }}
            </Link>
            <Link 
                class="px-4 py-1 border font-semibold hover:bg-[#130121] hover:text-white rounded relative"
                :class="route().current('admin.talents') || route().current('admin.talent.detail') ? 'bg-[#130121] text-white' : ''"
                :href="route('admin.talents')"
            >
                {{ Helper.translate('Talents') }}
            </Link>
            <Link 
                class="px-4 py-1 border font-semibold hover:bg-[#130121] hover:text-white rounded relative"
                :class="route().current('admin.categories') ? 'bg-[#130121] text-white' : ''"
                :href="route('admin.categories')"
            >
                {{ Helper.translate('Categories') }}
            </Link>
            <Link 
                class="px-4 py-1 border font-semibold hover:bg-[#130121] hover:text-white rounded relative"
                :class="route().current('admin.occasions') ? 'bg-[#130121] text-white' : ''"
                :href="route('admin.ocassions')"
            >
                {{ Helper.translate('Occasion') }}
            </Link>
            <Link 
                class="px-4 py-1 border font-semibold hover:bg-[#130121] hover:text-white rounded relative"
                :class="route().current('admin.countries') ? 'bg-[#130121] text-white' : ''"
                :href="route('admin.countries')"
            >
                {{ Helper.translate('Countries') }}
            </Link>
            <Link 
                class="px-4 py-1 border font-semibold hover:bg-[#130121] hover:text-white rounded relative"
                :class="route().current('admin.contact') ? 'bg-[#130121] text-white' : ''"
                :href="route('admin.contact')"
            >
                {{ Helper.translate('Contact Info') }}
            </Link>
            <Link 
                class="px-4 py-1 border font-semibold hover:bg-[#130121] hover:text-white rounded relative"
                :class="route().current('admin.settings') ? 'bg-[#130121] text-white' : ''"
                :href="route('admin.settings')"
            >
                {{ Helper.translate('Settings') }}
            </Link>
        </div>
        <div class="grid gap-2">
            <button class="px-4 py-1 border font-semibold bg-orange-500 text-white rounded relative">
                {{ Helper.translate('Send Emails') }}
            </button>
            <Link :href="route('logout')" method="post" as="button" class="px-4 py-1 border font-semibold bg-red-500 text-white rounded relative">
                {{ Helper.translate('Logout') }}
            </Link>
        </div>
    </div>
</template>

<script setup>
    import { Link } from '@inertiajs/inertia-vue3';
    import Helper from '@/Helper';
</script>

<style scoped>

</style>
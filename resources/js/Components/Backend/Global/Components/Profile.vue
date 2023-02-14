<template>
    <div class="relative group">
        <span 
            class="font-black w-10 h-10 grid content-center justify-center rounded-full p-2 text-xs cursor-pointer"
            :class="
                user.role && user.role == 'talent' ? 'bg-blue-500' : 
                user.role && user.role == 'admin' ? 'bg-green-500' : 
                user.role && user.role == 'user' ? 'bg-red-500' : ''
            "
        >
            {{ getTwoLatterOfName(user.name) }}
        </span>
        <div class="opacity-0 invisible group-hover:visible group-hover:opacity-100 dropdown grid absolute right-0 top-[50px] bg-white text-[var(--text-color)] rounded shadow-lg z-10">
            <span class="w-2 h-2 bg-white absolute right-4 rotate-45 bottom-full transform translate-y-1/2"></span>
            <Link
                class="px-4 py-2 border-b border-b-[--text-color] border-opacity-20 hover:bg-gray-100 transition-all" 
                :href="
                    user.role && user.role == 'talent' ? route('talent.dashboard') : 
                    user.role && user.role == 'admin' ? route('admin.dashboard') : 
                    user.role && user.role == 'user' ? route('user.dashboard') : 
                    route('home')
                "
            >
                Dashboard
            </Link>
            <Link 
                class="px-4 py-2 hover:bg-gray-100 transition-all"
                :href="route('logout')" 
                method="post"
            >
                Logout
            </Link>
        </div>
    </div>
</template>

<script setup>
    import { get } from 'lodash'
    import { computed } from '@vue/reactivity'
    import { Link, usePage } from '@inertiajs/inertia-vue3'

    const user = computed(() => {
        const { role, name } = get(usePage().props.value, 'auth.user')
        return { role, name }
    })

    const getTwoLatterOfName = (name) => {
        name = name.split(' ')
        if(name.length>1){
            return name[0][0]+name[1][0]
        }
        return name[0][0]+name[0][1]
    }
</script>

<style lang="scss" scoped>

</style>
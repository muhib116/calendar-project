<template>
    <DashboardLayout>
        <template v-slot:leftSidebar>
            <LeftSide />
        </template>
        <template v-slot:content>
            <div class="container mx-auto">
                <h1 class="font-semibold text-xl mb-2">
                    {{ Helper.translate('Following') }}
                </h1>
                <div v-if="!isEmpty(following)" class="grid xl:grid-cols-4 md:grid-cols-2 grid-cols-1 gap-6">
                    <template v-for="follow in following" :key="follow.id">
                        <Link :href="route('item.details', follow.id)" class="relative hover:shadow-xl transition-all">
                            <img class="customRatio" src="https://images.unsplash.com/photo-1673878034060-2d97a101563a?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHwzfHx8ZW58MHx8fHw%3D&auto=format&fit=crop&w=800&q=60" alt="">
                            <div class="absolute bottom-0 p-4 bg-white w-full bg-opacity-50 backdrop-blur-md border-t font-semibold text-center">
                                <h2 class="truncate">
                                    {{ Helper.translate(follow.name, true) }}
                                </h2>
                                <h2 class="text-sm truncate">
                                    {{ Helper.translate(get(follow, 'category.name'), true) }}
                                </h2>
                                <button @click.prevent="unfollow(follow.id)" class="bg-red-500 text-white px-4 mt-2 rounded-xl text-sm">
                                    {{ Helper.translate('UnFollow') }}
                                </button>
                            </div>
                        </Link>
                    </template>
                </div>
                <div v-else>
                    <Alert />
                </div>
            </div>
        </template>
    </DashboardLayout>
</template>

<script setup>
    import { Link } from '@inertiajs/inertia-vue3';
    import DashboardLayout from '../DashboardLayout.vue'
    import LeftSide from '@/Components/Backend/UserDashboard/LeftSide.vue';
    import { Inertia } from '@inertiajs/inertia';
    import Helper from '@/Helper';
    import { get, isEmpty } from 'lodash';
    import Alert from '@/Components/Global/Alert.vue'
    const props = defineProps({
        following: Array,
    });

    const unfollow = (id) => {
        Helper.confirm(Helper.translate('Are you sure to unfollow?'), ()=>{
            Inertia.post(route('item.followTalents', id));
        })
        // following
    }
</script>


<style scoped>
    .content{
        grid-template-columns: 250px 1fr;
    }
    .customRatio{
        aspect-ratio: 9/16;
        object-fit: cover;
        object-position: center;
    }
</style>
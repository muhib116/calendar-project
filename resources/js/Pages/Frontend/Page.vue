<template>
    <Master>
        <div class="px-4">
            <div v-if="$page.props.page" class="container mx-auto py-5 relative">
                <Head :title="$page.props.page.title" />
                <div>
                    <h1 class="text-2xl mb-4 font-bold text-black">{{ $page.props.page.title }}</h1>
                    <div class="" v-html="$page.props.page.description"></div>
                </div>
            </div>
            <Alert v-else title="No Result Found" />
        </div>
    </Master>
</template>

<script setup>
import Master from '../Backend/Master.vue';
import { Head } from '@inertiajs/inertia-vue3'
import Alert from '@/Components/Global/Alert.vue';
</script>
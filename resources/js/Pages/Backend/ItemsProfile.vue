<template>
    <Master>
        <div class="px-4">
            <div class="container mx-auto py-5 relative">
                <button @click="back" type="button" class="mb-4 absolute right-full mr-2">
                    <BackIcon />
                </button>
                <div class="grid grid-cols-3 gap-6">
                    <div class="video customRatio">
                        <video controls>
                            <source :src="`${$page.props.ziggy.url}/${talent.video_path}`">
                        </video>
                        <!-- <Video poster="https://images.unsplash.com/photo-1673878034060-2d97a101563a?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHwzfHx8ZW58MHx8fHw%3D&auto=format&fit=crop&w=800&q=60" /> -->
                    </div>
                    <div class="grid grid-rows-3 items-baseline">
                        <div>
                            <h1 class="text-xl font-bold">{{ Helper.translate(talent.name, true) }}</h1>
                            <h2 class="text-gray-500">{{ Helper.translate(get(talent, 'category.name')) }}</h2>
                        </div>
                        <div class="grid gap-4">
                            <Link :href="route('payment.info')" class="px-4 py-2 rounded text-xl bg-red-600 text-white font-bold text-center">
                                {{ Helper.translate('Personalized Video') }}: {{ Helper.priceFormate(50) }}
                            </Link>
                            <Link :href="route('payment.info')" class="px-4 py-2 rounded text-xl bg-black text-white font-bold text-center">
                                {{ Helper.translate('My Life') }}
                            </Link>
                            <Link :href="route('payment.info')" class="px-4 py-2 rounded text-xl bg-sky-500 text-white font-bold text-center">
                                {{ Helper.translate('Tip') }}
                            </Link>
                        </div>
                        <button @click="handleFollow(talent.id)" :disabled="followForm.processing" type="button" class="self-end flex items-center sticky bottom-4 bg-[var(--btn-bg-color)] text-[var(--btn-text-color)] px-8 py-2 text-xl rounded font-semibold shadow mx-auto disabled:opacity-80">
                            <LoaderIcon v-if="followForm.processing" />
                            <template v-if="talent.isFollow">
                                {{ Helper.translate('Unfollow') }}
                            </template>
                            <template v-else>
                                {{ Helper.translate('Follow') }}
                            </template>
                        </button>
                    </div>
                    <div class="calendar flex flex-col customRatio">
                        <div class="bg-red-100 h-full relative">
                            <span class="price absolute top-4 right-4 shadow bg-sky-500 font-bold px-4 py-1 rounded text-white">$10.00</span>
                            <img class="block h-full w-full object-cover object-center" src="https://images.unsplash.com/photo-1673762482215-33acd768cb46?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2250&q=80" />
                            <h2 class="absolute bottom-0 p-4 bg-white w-full bg-opacity-50 backdrop-blur-md font-semibold truncate">Calendar Name</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </Master>
</template>

<script setup>
import Master from './Master.vue';
import Video from '@/Components/Global/Video.vue';
import { Link, useForm } from '@inertiajs/inertia-vue3';
import BackIcon from '@/Icons/BackIcon.vue';
import { get } from 'lodash';
import Helper from '@/Helper';
import LoaderIcon from '@/Components/Global/Icons/LoaderIcon.vue'

const props = defineProps({
    talent: Object,
});

const followForm = useForm({})
const handleFollow = (id) => {
    followForm.post(route('item.followTalents', id));
}
const back = () => {
    history.back()
}

</script>

<style lang="scss" scoped>

</style>
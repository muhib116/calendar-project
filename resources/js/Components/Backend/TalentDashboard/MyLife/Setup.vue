<template>
    <div>
        <h1 class="text-lg">
            {{ Helper.translate('Please setup a') }} <strong>{{ Helper.translate('yearly') }}</strong> {{ Helper.translate('subscription price') }} ({{ Helper.translate('min') }} {{ Helper.priceFormate(50) }}/{{ Helper.translate('year') }})
        </h1>

        <div class="grid grid-cols-2 gap-6">
            <div>
                <h2 class="font-bold mt-5">{{ Helper.translate('Enter Amount') }}</h2>
                <div class="flex gap-10">
                    <div class="relative mb-6">
                        <CInput v-model="form.amount" type="number" placeholder="Amount" class="w-full"/>
                        <span class="absolute top-full left-0 text-xs text-red-500">{{ Helper.translate(form.errors.amount, true) }}</span>
                    </div>
                    <div>
                        <button @click="handleSave" class="bg-red-500 text-white font-bold px-4 py-2 rounded">
                            {{ Helper.translate('Save') }}
                        </button>
                    </div>
                </div>
                <div class="grid items-center gap-2">
                    <h2 class="font-bold mt-5">{{ Helper.translate('Active') }}</h2>
                    <Switch v-model="form.status" class="font-bold"/>
                </div>
            </div>
            <div>
                <div class="bg-red-100 h-full relative">
                    <label class="price absolute top-4 right-4 shadow bg-sky-500 font-bold p-2 rounded text-white cursor-pointer">
                        <CameraIcon />
                        <input type="file" @input="(e) => handleCover(e.target.files[0])" hidden />
                    </label>
                    <img
                        class="block w-full h-[200px] object-cover object-center"
                        style="height: 250px;"
                        :src="`${$page.props.asset}${get($page.props.auth, 'user.cover_image')}`">
                    <h2 class="absolute bottom-0 p-4 bg-white w-full bg-opacity-50 backdrop-blur-md font-semibold truncate cursor-pointer">
                        {{ Helper.translate('Please add a cover picture') }}
                    </h2>
                </div>
            </div>
        </div>
    </div>
</template>

<script setup>
import CInput from '@/Components/Global/CInput.vue'
import Switch from '@/Components/Global/Switch.vue'
import CameraIcon from '@/Icons/CameraIcon.vue'
import { useForm, usePage } from '@inertiajs/inertia-vue3';
import { onMounted, ref } from 'vue'
import { isEmpty, get } from 'lodash';
import Helper from '@/Helper';

const form = useForm({
    amount: null,
    status: 0,
    type: 'mylife',
});

const coverForm = useForm({
    image: null,
})

onMounted(()=> {
    let mylife = usePage().props.value.mylife;
    if (!isEmpty(mylife)) {
        form.amount = mylife.amount;
        form.status = mylife.status;
    }
})

const handleCover = (file) => {
    coverForm.image = file;
    Helper.confirm('Are you sure to update cover image?', () => {
        saveCover();
    })
}

const saveCover = () => {
    coverForm.post(route('talent.saveCover'))
}

const handleSave = () => {
    form.post(route('talent.mylife.saveAmount'));
}

</script>

<style lang="scss" scoped>

</style>
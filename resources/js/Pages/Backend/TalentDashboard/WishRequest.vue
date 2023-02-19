<template>
    <DashboardLayout>
        <template v-slot:leftSidebar>
            <LeftSide />
        </template>
        <template v-slot:content>
            <h1 class="text-lg">
                {{ Helper.translate('Please setup an amount to charge for') }} <strong>{{ Helper.translate('Wish Request') }}</strong> ({{ Helper.translate('min') }} {{ Helper.priceFormate(30) }} /{{ Helper.translate('year') }})
            </h1>
        
            <div class="grid gap-6">
                <h2 class="font-bold mt-5">{{ Helper.translate('Enter Amount') }}</h2>
                <div class="flex gap-10 w-full lg:w-1/2">
                    <div class="relative mb-6">
                        <CInput v-model="form.amount" type="number" min="30" placeholder="Amount" class="w-full"/>
                        <span class="absolute top-full left-0 text-xs text-red-500">{{ Helper.translate(form.errors.amount, true) }}</span>
                    </div>
                    <div>
                        <button @click="handleSave" class="bg-red-500 text-white font-bold px-4 py-2 rounded">
                            {{ Helper.translate('Update/Save') }}
                        </button>
                    </div>
                </div>
                <div class="grid items-center gap-2">
                    <h2 class="font-bold mt-5">{{ Helper.translate('Active') }}</h2>
                    <Switch v-model="form.status" class="font-bold"/>
                </div>
            </div>
        </template>
    </DashboardLayout>
</template>

<script setup>
import DashboardLayout from '../DashboardLayout.vue'
import LeftSide from '@/Components/Backend/TalentDashboard/LeftSide.vue'
import CInput from '@/Components/Global/CInput.vue'
import Switch from '@/Components/Global/Switch.vue'
import { useForm, usePage } from '@inertiajs/inertia-vue3'
import Helper from '@/Helper'
import { isEmpty } from 'lodash'
import { onMounted } from '@vue/runtime-core'


const form = useForm({
    amount: null,
    status: 0,
    type: 'wish',
});

onMounted(()=> {
    let wish = usePage().props.value.wish;
    if (!isEmpty(wish)) {
        form.amount = wish.amount;
        form.status = wish.status;
    }
})

const handleSave = () => {
    form.post(route('talent.wish.saveAmount'));
}

</script>


<style scoped>
    .content{
        grid-template-columns: 250px 1fr;
    }
</style>
<template>
    <div>
        <h2 class="text-lg font-semibold mt-6 mb-4 text-red-500 text-center">{{ Helper.translate('Minimum Payout') }} {{ Helper.priceFormate(200) }}</h2>
        <div class="relative mb-6">
            <CInput v-model="form.amount" type="number" placeholder="Enter Payout Amount" />
            <span class="absolute top-full left-0 text-xs text-red-500">{{ Helper.translate(form.errors.amount, true) }}</span>
        </div>
        <div class="relative mb-6">
            <CInput v-model="form.bank_name" type="text" placeholder="Bank Name" />
            <span class="absolute top-full left-0 text-xs text-red-500">{{ Helper.translate(form.errors.bank_name, true) }}</span>
        </div>
        <div class="relative mb-6">
            <CInput v-model="form.account_number" type="text" placeholder="Account Number" />
            <span class="absolute top-full left-0 text-xs text-red-500">{{ Helper.translate(form.errors.account_number, true) }}</span>
        </div>
        <button @click="handleSave" class="bg-green-500 text-white px-4 py-2 rounded block ml-auto mt-5 font-semibold">
            {{ Helper.translate('Submit') }}
        </button>
    </div>
</template>

<script setup>
import CInput from '@/Components/Global/CInput.vue'
import { ref } from 'vue';
import { isEmpty } from 'lodash';
import { useForm } from '@inertiajs/inertia-vue3';
import Helper from '@/Helper';

const form = useForm({
    bank_type: 'Bank',
    amount: null,
    bank_name: null,
    account_number: null,
    // settings: null,
});
 
const emit = defineEmits(['close'])
const handleSave = () => { 
    form.post(route('talent.payoutRequest'), {
        onSuccess(page){
            if (isEmpty(page.props.errors)) {
                form.reset(); 
                emit('close')
            }
        }
    });
}

</script>
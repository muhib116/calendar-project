<template>
    <Master>
        <div class="px-4">
            <div class="container mx-auto py-5">
                <div class="cardWrapper grid gap-6">
                    <div class="border p-6 rounded-lg grid gap-4">
                        <div class="border flex items-center rounded-lg bg-gray-100 px-2">
                            <div class="px-2 flex gap-1">
                                <CardIcon class="shrink-0 w-4 h-4"/>
                                <VisaIcon class="shrink-0 w-4 h-4"/>
                                <AmericanExpressIcon class="shrink-0 w-4 h-4"/>
                            </div>
                            <input type="text" class="w-full border-0 focus-within:ring-0 bg-transparent py-4">
                            <div class="bg-blue-500 text-white w-7 h-7 flex items-center justify-center flex-shrink-0 rounded-full mr-2">
                                <CheckIcon class="w-4" />
                            </div>
                        </div>
                        <div class="flex justify-between mt-4">
                            <div>
                                <h3 class="font-bold text-[14px]">{{ Helper.translate('Expiry Date') }}</h3>
                                <h3 class="text-[12px] text-gray-400">{{ Helper.translate('Enter the expiration date of the card') }}</h3>
                            </div>
                            <div>
                                <input type="month" class="w-[250px] border-black border-opacity-10 font-semibold placeholder-gray-300 rounded-lg" />
                            </div>
                        </div>
                        <div class="flex justify-between mt-4">
                            <div>
                                <h3 class="font-bold text-[14px]">{{ Helper.translate('CVC/CVV Number') }}</h3>
                                <h3 class="text-[12px] text-gray-400">{{ Helper.translate('Enter card verification code from the back of the card') }}</h3>
                            </div>
                            <div>
                                <input type="password" placeholder="CVC/CVV" class="w-[250px] border-black border-opacity-10 font-semibold placeholder-gray-300 rounded-lg" />
                            </div>
                        </div>
                        <div class="flex justify-between mt-4">
                            <div>
                                <h3 class="font-bold text-[14px]">{{ Helper.translate('Cardholder Name') }}</h3>
                                <h3 class="text-[12px] text-gray-400">{{ Helper.translate("Enter cardholder's name") }}</h3>
                            </div>
                            <div>
                                <input type="text" placeholder="Cardholder Name" class="w-[250px] border-black border-opacity-10 font-semibold placeholder-gray-300 rounded-lg" />
                            </div>
                        </div>
                        <button class="bg-blue-500 px-4 py-2 mt-4 rounded-lg text-white font-semibold w-full">{{ Helper.translate('Pay Now') }}</button>
                    </div>
                    
                    <div class="border p-6 rounded-lg bg-gray-100">
                        <div class="card w-full h-[200px] bg-blue-400 rounded-lg mb-4 shadow-lg py-6 px-5 relative overflow-hidden">
                            <img :src="masterCardImg" class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2" />
                            <div class="relative z-10">
                                <div class="flex gap-1 items-center">
                                    <CardIcon class="shrink-0 w-6 h-6"/>
                                    <VisaIcon class="shrink-0 w-6 h-6"/>
                                    <AmericanExpressIcon class="shrink-0 w-4 h-4"/>
                                </div>
                                <h1 class="uppercase font-bold text-[14px] mt-2 text-white">Mr. Cardholder</h1>
                                <h1 class="uppercase font-bold text-[14px] mt-2 text-white">1563 2156 8972</h1>
                                <h1 class="uppercase font-bold text-[14px] mt-8 text-white">
                                    {{ Helper.translate('Expiry Date') }} : November / 2028
                                </h1>
                            </div>
                        </div>
                        <div class="font-semibold flex justify-between gap-2 mt-8 text-sm">
                            <span class="text-gray-400">
                                {{ Helper.translate('Product') }}
                            </span>
                            <span class="capitalize">
                                {{ Helper.translate(type) }}
                            </span>
                        </div>
                        <div class="font-semibold flex justify-between mt-1 text-sm">
                            <span class="text-gray-400">
                                {{ Helper.translate('Order number') }}
                            </span>
                            <span class="">
                                {{ orderCode }}
                            </span>
                        </div>
                        <div class="font-bold grid text-gray-400 mt-8 text-sm border-t pt-4">
                            <span class="">{{ Helper.translate('You have to Pay') }}</span>
                            <span class="text-black text-lg">
                                {{ getNumber(Helper.getCommission(earning.amount) + earning.amount) }}
                                <small class="text-[10px]">
                                    <template v-if="getSent(Helper.getCommission(earning.amount) + earning.amount)">
                                        .{{ getSent(Helper.getCommission(earning.amount) + earning.amount) }}
                                    </template>
                                    <span class="text-gray-400"> USD</span>
                                </small>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </Master>
</template>

<script setup>
import Master from '../Master.vue'
import CardIcon from '@/Pages/Backend/Payment/icons/CardIcon.vue'
import CheckIcon from '@/Icons/CheckIcon.vue'
import masterCardImg from './icons/masterCard.jpg'
import VisaIcon from './icons/VisaIcon.vue';
import AmericanExpressIcon from '@/Icons/AmericanExpressIcon.vue'
import Helper from '@/Helper';
import { onMounted } from 'vue';

const props = defineProps({
    orderCode: String,
    type: String,
    talent: {
        type: Object,
        default: {}
    },
    earning: {
        type: Object,
        default: {}
    },
});

onMounted(()=> {
    let cashType = localStorage.getItem('cashType');
    cashType = JSON.parse(cashType);
    if (cashType.payType != props.type) {
        window.history.back();
    }
});


const getNumber = (amount) => {
    if (String(amount).indexOf('.') == -1) return amount;
    return String(amount).split('.')[0];
}
const getSent = (amount) => {
    if (String(amount).indexOf('.') == -1) return null;
    return String(amount).split('.')[1];
}
</script>

<style scope>
    .cardWrapper{
        grid-template-columns: calc(100% - 450px) 450px;
    } 
</style>
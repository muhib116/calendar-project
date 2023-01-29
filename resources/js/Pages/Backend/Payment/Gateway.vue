<template>
    <Master>
        <div class="px-4">
            <div class="container mx-auto py-5">
                <div class="cardWrapper grid gap-6">
                    <div class="border p-6 rounded-lg grid gap-4">
                        <div class="border flex items-center rounded-lg bg-gray-100 px-2">
                            <div class="px-2">
                                <CardIcon />
                            </div>
                            <input type="text" class="w-full border-0 focus-within:ring-0 bg-transparent py-4">
                            <div class="bg-blue-500 text-white w-7 h-7 flex items-center justify-center rounded-full mr-2">
                                <CheckIcon class="w-4" />
                            </div>
                        </div>
                        <div class="flex justify-between mt-4">
                            <div>
                                <h3 class="font-bold text-[14px]">Expiry Date</h3>
                                <h3 class="text-[12px] text-gray-400">Enter the expiration date of the card</h3>
                            </div>
                            <div>
                                <input type="month" class="w-[250px] border-black border-opacity-10 font-semibold placeholder-gray-300 rounded-lg" />
                            </div>
                        </div>
                        <div class="flex justify-between mt-4">
                            <div>
                                <h3 class="font-bold text-[14px]">CVC/CVV Number</h3>
                                <h3 class="text-[12px] text-gray-400">Enter card verification code from the back of the card</h3>
                            </div>
                            <div>
                                <input type="password" placeholder="CVC/CVV" class="w-[250px] border-black border-opacity-10 font-semibold placeholder-gray-300 rounded-lg" />
                            </div>
                        </div>
                        <div class="flex justify-between mt-4">
                            <div>
                                <h3 class="font-bold text-[14px]">Cardholder Name</h3>
                                <h3 class="text-[12px] text-gray-400">Enter cardholder's name</h3>
                            </div>
                            <div>
                                <input type="text" placeholder="Cardholder Name" class="w-[250px] border-black border-opacity-10 font-semibold placeholder-gray-300 rounded-lg" />
                            </div>
                        </div>
                        <button class="bg-blue-500 px-4 py-2 mt-4 rounded-lg text-white font-semibold w-full">Pay Now</button>
                    </div>
                    
                    <div class="border p-6 rounded-lg bg-gray-100">
                        <div class="card w-full h-[200px] bg-blue-400 rounded-lg mb-4 shadow-lg py-6 px-5 relative overflow-hidden">
                            <img :src="masterCardImg" class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2" />
                            <div class="relative z-10">
                                <CardIcon class="transform scale-150" />
                                <h1 class="uppercase font-bold text-[14px] mt-2 text-white">Mr. Cardholder</h1>
                                <h1 class="uppercase font-bold text-[14px] mt-2 text-white">1563 2156 8972</h1>
                                <h1 class="uppercase font-bold text-[14px] mt-8 text-white">
                                    Expiry Date : November / 2028
                                </h1>
                            </div>
                        </div>
                        <div class="font-semibold flex justify-between gap-2 mt-8 text-sm">
                            <span class="text-gray-400">
                                Product
                            </span>
                            <span class="">
                                Calendar
                            </span>
                        </div>
                        <div class="font-semibold flex justify-between mt-1 text-sm">
                            <span class="text-gray-400">
                                Order number
                            </span>
                            <span class="">
                                5645231
                            </span>
                        </div>
                        <div class="font-bold grid text-gray-400 mt-8 text-sm border-t pt-4">
                            <span class="">You have to Pay</span>
                            <span class="text-black text-lg">
                                549 
                                <small class="text-[10px]">
                                    .99
                                    <span class="text-gray-400">USD</span>
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
</script>

<style scope>
    .cardWrapper{
        grid-template-columns: calc(100% - 450px) 450px;
    }
    .card{

    }
</style>
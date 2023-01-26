<template>
    <Master>
        <div class="px-4">
            <div class="container mx-auto py-5">
                <div class="shadow border rounded-lg overflow-hidden">
                    <div class="header grid grid-cols-3 items-center bg-blue-100 py-3 px-6">
                        <h1 class="text-xl font-semibold">Wish Payment</h1>
                        <h2 class="text-xl font-semibold text-center">$52.50</h2>
                        <div class="">
                            <div class="w-fit flex flex-col items-center justify-center ml-auto gap-2">
                                <img class="w-12 h-12 object-cover object-center rounded-full" src="https://images.unsplash.com/photo-1619895862022-09114b41f16f?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MjF8fHVzZXJ8ZW58MHx8MHx8&auto=format&fit=crop&w=800&q=60" alt="">
                                <h3 class="text-center font-bold">Muhibbullah Ansary</h3>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-center gap-4 justify-center p-4">
                        <VisaIcon class="w-20 h-20" />
                        <MasterCardIcon class="w-20 h-20" />
                    </div>
                </div>
            </div>
        </div>
    </Master>
</template>

<script setup>
import Master from '../Master.vue'
import MemberCard from '@/Components/Global/MemberCard.vue'
import VisaIcon from './icons/VisaIcon.vue'
import MasterCardIcon from './icons/MasterCardIcon.vue'
</script>
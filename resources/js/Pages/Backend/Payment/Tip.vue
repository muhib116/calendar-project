<template>
    <Master>
        <div class="px-4">
            <div class="container mx-auto py-5">
                <div class="flex justify-between items-center">
                    <button class="">
                        <BackIcon />
                    </button>
                    <MemberCard
                        class="ml-auto"
                        name="Muhibbullah Ansary"
                        designation="Front Developer"
                        image="https://images.unsplash.com/photo-1619895862022-09114b41f16f?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MjF8fHVzZXJ8ZW58MHx8MHx8&auto=format&fit=crop&w=800&q=60"
                    />
                </div>
                <div class="flex flex-col items-center justify-center gap-4 mt-10">
                    <h1 class="text-xl font-semibold">Tip Payment (min $10)</h1>
                    <CInput type="number" placeholder="Enter Amount" class="max-w-[258px] w-full" />
                    <button class="px-4 py-2 rounded text-xl bg-red-600 text-white font-bold text-center">
                        Continue To Payment
                    </button>
                </div>
            </div>
        </div>
    </Master>
</template>

<script setup>
import Master from '../Master.vue'
import MemberCard from '@/Components/Global/MemberCard.vue'
import CInput from '@/Components/Global/CInput.vue'
import BackIcon from '@/Icons/BackIcon.vue'
</script>
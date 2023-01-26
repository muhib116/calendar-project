<template>
    <Master>
        <div class="px-4">
            <div class="container mx-auto py-5">
                <div class="flex justify-between items-center">
                    <button class="">
                        <svg width="30" height="30" viewBox="-6 0 30 30" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd"><path fill="#FF6E6E" d="M15 0 0 15l15 15 3-3L6 15 18 3z"/><path d="m12.5 8.5-3-3L15 0l3 3-5.5 5.5Zm0 13L18 27l-3 3-5.5-5.5 3-3Z" fill="#0C0058"/></g></svg>
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
                    <CInput type="number" placeholder="Enter Amount"/>
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
import CInput from '@/Components/Global/CInput.vue';
</script>
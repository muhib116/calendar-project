<template>
    <DashboardLayout>
        <template v-slot:leftSidebar>
            <LeftSide />
        </template>
        <template v-slot:content>
            <Widget />

            <div class="flex justify-between items-center mt-10">
                <h1 class="font-semibold">Payout History</h1>
                <button @click="payoutModal = true" class="bg-red-500 px-4 py-1 rounded text-white font-semibold">Request Payout</button>
            </div>
            <Modal v-model="payoutModal">
                <PayoutRequest @close="payoutModal=false" />
            </Modal>

            <Table class="border border-b-0"/>

            <div class="flex justify-between items-center mt-4">
                <h3 class="">Showing 1 to 3 of 3 entries</h3>
                <div class="flex gap-4">
                    <button class="border px-2">
                        <svg class="w-4" width="32" height="32" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg"><path d="m19.031 4.281-11 11-.687.719.687.719 11 11 1.438-1.438L10.187 16 20.47 5.719Z"/></svg>
                    </button>
                    <button class="border px-2">
                        <svg class="w-4" width="32" height="32" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg"><path d="M12.969 4.281 11.53 5.72 21.812 16l-10.28 10.281 1.437 1.438 11-11 .687-.719-.687-.719Z"/></svg>
                    </button>
                </div>
            </div>
        </template>
    </DashboardLayout>
</template>

<script setup>
import { ref } from 'vue'
import DashboardLayout from '../DashboardLayout.vue'
import LeftSide from '@/Components/Backend/TalentDashboard/LeftSide.vue'
import Table from '@/Components/Backend/TalentDashboard/Payout/Table.vue'
import Widget from '@/Components/Backend/TalentDashboard/Payout/Widget.vue'
import Modal from '@/Components/Library/Modal.vue'
import PayoutRequest from '@/Pages/Backend/TalentDashboard/PayoutRequest.vue'

const payoutModal = ref(false)

const props = defineProps({
    requests: {
        type: Array,
        default: []
    }
})
// requests

</script>


<style scoped>
    .content{
        grid-template-columns: 250px 1fr;
    }
</style>
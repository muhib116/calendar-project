<template>
    <Master>
        <div class="px-4">
            <div class="container mx-auto py-5">
                <div class="grid content min-h-[80vh]">
                    <div class="border p-4">
                        <LeftSide />
                    </div>
                    <div class="border border-l-0 p-6">
                        <Widget />
                        <Table class="border border-b-0 mt-10"/>

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
                    </div>
                </div>
            </div>
        </div>
    </Master>
</template>

<script setup>
import Master from '../Master.vue'
import LeftSide from '@/Components/Backend/Account2/LeftSide.vue'
import Table from '@/Components/Backend/Account2/Payout/Table.vue'
import Widget from '@/Components/Backend/Account2/Payout/Widget.vue';
</script>


<style scoped>
    .content{
        grid-template-columns: 250px 1fr;
    }
</style>
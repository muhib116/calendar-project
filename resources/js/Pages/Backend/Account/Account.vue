<template>
    <Master>
        <div class="px-4">
            <div class="container mx-auto py-5">
                <div class="grid content min-h-[80vh]">
                    <div class="border p-4">
                        <LeftSide />
                    </div>
                    <div class="border border-l-0 p-6 flex flex-col gap-6">
                        <PersonalInformation />
                        <PasswordChange />
                        <DeleteAccount />
                    </div>
                </div>
            </div>
        </div>
    </Master>
</template>

<script setup>
import Master from '../Master.vue'
import LeftSide from '@/Components/Backend/Account/LeftSide.vue'
import PersonalInformation from '@/Components/Backend/Account/PersonalInformation.vue'
import PasswordChange from '@/Components/Backend/Account/PasswordChange.vue'
import DeleteAccount from '@/Components/Backend/Account/DeleteAccount.vue';
</script>


<style scoped>
    .content{
        grid-template-columns: 250px 1fr;
    }
</style>
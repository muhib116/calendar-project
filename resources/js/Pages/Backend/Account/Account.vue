<template>
    <DashboardLayout>
        <template v-slot:leftSidebar>
            <LeftSide />
        </template>
        <template v-slot:content>
            <PersonalInformation />
            <PasswordChange />
            <DeleteAccount />
        </template>
    </DashboardLayout>
</template>

<script setup>
import DashboardLayout from '../DashboardLayout.vue'
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
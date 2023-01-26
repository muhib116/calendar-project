<template>
    <div>
        <h1 class="font-semibold text-xl mb-4">Change Password</h1>
        <div class="grid usernameAndEmailWrapper items-center gap-5 flex-wrap">
            <CInput type="password" placeholder="Old Password"/>
            <CInput type="password" placeholder="New Password"/>
            <CInput type="password" placeholder="Confirm Password"/>
        </div>
        <button class="bg-red-500 text-white text-bold rounded shadow px-4 py-2 whitespace-nowrap block w-fit ml-auto mt-4">
            Update / Save
        </button>
    </div>
</template>

<script setup>
import CInput from '@/Components/Global/CInput.vue'
</script>

<style scoped>
.usernameAndEmailWrapper{
    grid-template-columns: 1fr 1fr 1fr;
}
@media all and (max-width: 1200px){
    .usernameAndEmailWrapper{
        grid-template-columns: 1fr;
    }
}
</style>
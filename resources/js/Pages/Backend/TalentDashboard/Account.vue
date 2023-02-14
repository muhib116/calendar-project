<template>
    <DashboardLayout>
        <template v-slot:leftSidebar>
            <LeftSide />
        </template>
        <template v-slot:content>
            <div class="grid grid-cols-2 gap-6">
                <div class="border p-6">
                    <h1 class="font-semibold text-xl mb-4">{{ Helper.translate('Personal Information') }}</h1>
                    <div class="relative mb-6">
                        <CInput type="text" v-model="form.username" placeholder="Username" />
                        <span class="absolute top-full left-0 text-xs text-red-500">{{ Helper.translate(form.errors.username, true) }}</span>
                    </div>
                    <div class="relative mb-6">
                        <CInput type="text" v-model="form.first_name" placeholder="First Name" />
                        <span class="absolute top-full left-0 text-xs text-red-500">{{ Helper.translate(form.errors.first_name, true) }}</span>
                    </div>
                    <div class="relative mb-6">
                        <CInput type="text" v-model="form.last_name" placeholder="Last Name" />
                        <span class="absolute top-full left-0 text-xs text-red-500">{{ Helper.translate(form.errors.last_name, true) }}</span>
                    </div>
                    <div class="relative mb-6">
                        <CInput type="email" v-model="form.email" disabled="true" placeholder="Email" />
                        <span class="absolute top-full left-0 text-xs text-red-500">{{ Helper.translate(form.errors.last_name, true) }}</span>
                    </div>
                    <button @click="handleSave" class="bg-red-500 px-4 py-1 rounded text-white font-bold mt-4 ml-auto block">
                        {{ Helper.translate('Update') }}
                    </button>
                </div>
                <div class="border p-6">
                    <h1 class="font-semibold text-xl mb-4">
                        {{ Helper.translate('Change Password') }}
                    </h1>
                    <div class="relative mb-6">
                        <CInput type="text" v-model="form.current_password" placeholder="Old Password" />
                        <span class="absolute top-full left-0 text-xs text-red-500">{{ Helper.translate(form.errors.current_password, true) }}</span>
                    </div>
                    <div class="relative mb-6">
                        <CInput type="text" v-model="form.password" placeholder="New Password" />
                        <span class="absolute top-full left-0 text-xs text-red-500">{{ Helper.translate(form.errors.password, true) }}</span>
                    </div>
                    <div class="relative mb-6">
                        <CInput type="text" v-model="form.password_confirmation" placeholder="Confirm Password" />
                    </div>
                    <button @click="handleSave" class="bg-red-500 px-4 py-1 rounded text-white font-bold mt-4 ml-auto block">
                        {{ Helper.translate('Save') }}
                    </button>
                </div>
            </div>
            
            <div class="bg-red-50 p-4 py-6 mt-4">
                <h1 class="font-semibold text-xl mb-4 text-center">{{ Helper.translate('Delete Account') }}</h1>
                <div class="flex justify-center gap-6">
                    <button class="bg-gray-500 text-white text-bold rounded shadow px-4 py-2 whitespace-nowrap block w-fit mt-4">
                        {{ Helper.translate('No') }}
                    </button>
                    <button @click="handleDelete" class="bg-red-500 text-white text-bold rounded shadow px-4 py-2 whitespace-nowrap block w-fit mt-4">
                        {{ Helper.translate('Yes') }}
                    </button>
                </div>
            </div>
        </template>
    </DashboardLayout>
</template>

<script setup>
import DashboardLayout from '../DashboardLayout.vue'
import LeftSide from '@/Components/Backend/TalentDashboard/LeftSide.vue'
import CInput from '@/Components/Global/CInput.vue';
import { useForm } from '@inertiajs/inertia-vue3'
import Helper from '@/Helper';
import { ref } from 'vue'
import { isEmpty, get } from 'lodash';


const form = useForm({
    first_name: null,
    last_name: null,
    username: null,
    deleteUser: null,
    current_password: null,
    password: null,
    password_confirmation: null,
});
const handleDelete = () => {
    Helper.confirm('Are you sure to delete your account?', () => {
        form.deleteUser = true;
        handleSave();
    })
}
const handleSave = () => {
    form.put(route('user.accountUpdate'), {
        onSuccess(e) {
            if (isEmpty(e.props.errors)) {
                form.reset();
            }
        }
    })
}

</script>


<style scoped>
    .content{
        grid-template-columns: 250px 1fr;
    }
</style>
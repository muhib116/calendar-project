<template>
    <div class="bg-white w-[600px] p-10 shadow">
        <div class="font-semibold flex gap-10 items-center pb-3 mb-3 border-b">
            <button 
                @click="templateName='SignIn'"
                :class="templateName == 'SignIn' ? 'opacity-100' : 'opacity-50'"
            >
                Login
            </button>
            <button 
                @click="templateName='SignUp'"
                :class="templateName == 'SignUp' ? 'opacity-100' : 'opacity-50'"
            >
                Signup
            </button>
            <button 
                @click="templateName='TalentSignup'"
                :class="templateName == 'TalentSignup' ? 'opacity-100' : 'opacity-50'"
            >
                Become a Talent
            </button>
        </div>

        <h1 class="font-bold mt-5">{{ componentList[templateName].title }}</h1>

        <component 
            @login="templateName='SignIn'" 
            @register="templateName='SignUp'" 
            @forgotPassword="templateName='ForgotPassword'"
            :is="componentList[templateName].component" 
        />

        <div class="flex justify-between gap-3 items-center">
            <button class="bg-black text-white px-4 py-2" @click="$emit('close')">Close</button>
        </div>
    </div>
</template>

<script setup>
    import { ref } from 'vue'
    import SignIn from '@/Components/Frontend/CustomAuth/SignIn.vue'
    import SignUp from '@/Components/Frontend/CustomAuth/SignUp.vue'
    import TalentSignup from '@/Components/Frontend/CustomAuth/TalentSignup.vue'
    import ForgotPassword from '@/Components/Frontend/CustomAuth/ForgotPassword.vue'

    const componentList = {
        SignIn: {
            title: 'Sign In Here',
            component: SignIn
        },
        SignUp: {
            title: 'Create Your Account',
            component: SignUp
        },
        TalentSignup: {
            title: 'Create Your Account as Talent',
            component: TalentSignup
        },
        ForgotPassword: {
            title: 'Forgot Password ?',
            component: ForgotPassword
        }
    }

    const templateName = ref('SignIn')
</script>

<style scoped>

</style>
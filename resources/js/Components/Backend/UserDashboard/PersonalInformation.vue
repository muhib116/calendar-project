<template>
    <div>
        <h1 class="font-semibold text-xl mb-4">{{ Helper.translate('Personal Information') }}</h1>
        <div class="grid usernameAndEmailWrapper items-center gap-5 flex-wrap">
            <CInput type="text" v-model="form.name" :placeholder="Helper.translate('Username')"/>
            <CInput disabled="false" type="email" v-model="$page.props.auth.user.email" />
            <button @click="handleSave" class="bg-red-500 text-white text-bold rounded shadow px-4 py-2 whitespace-nowrap">
                {{ Helper.translate('Update') }} / {{ Helper.translate('Save') }}
            </button>
        </div>
    </div>
</template>

<script setup>
import CInput from '@/Components/Global/CInput.vue'
import { useForm } from '@inertiajs/inertia-vue3'
import Helper from '@/Helper'

const props = defineProps({
    user: Object
})
const form = useForm({
    name: props.user.name
})
const handleSave = () => {
    form.put(route('user.account.update'))
}
</script>

<style scoped>
.usernameAndEmailWrapper{
    grid-template-columns: 1fr 1fr 150px;
}
</style>
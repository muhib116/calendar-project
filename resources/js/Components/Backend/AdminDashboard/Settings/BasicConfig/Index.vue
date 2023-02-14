<template>
    <h1 class="text-lg my-2 text-center mb-4">Basic Configuration</h1>
    <div class="border border-sky-400 border-opacity-40 rounded shadow p-10 w-fit mx-auto">
        <table>
            <tr>
                <th class="font-medium text-sm text-right px-2">Logo : </th>
                <td class="flex items-center gap-4 px-4">
                    <CInput 
                        class="w-[300px]"
                        type="text" 
                        placeholder="ex: NE[red]X[red][blue]TWISHER[blue]"
                        v-model="form.logo"
                    />
                </td>
            </tr>
            <tr>
                <th class="font-medium text-sm text-right px-2">Company name : </th>
                <td class="flex items-center gap-4 px-4">
                    <CInput 
                        class="w-[300px]"
                        type="text" 
                        placeholder="Enter company name" 
                        v-model="form.companyName"
                    />
                </td>
            </tr>
            <tr>
                <th class="font-medium text-sm text-right px-2">Commission in percentage : </th>
                <td class="flex items-center gap-4 px-4">
                    <CInput 
                        class="w-[300px]"
                        type="number" 
                        placeholder="ex: 5" 
                        v-model="form.commission"
                    /> %
                </td>
            </tr>
            <tr>
                <th class="font-medium text-sm text-right px-2">Date Formate : </th>
                <td class="flex items-center gap-4 px-4">
                    <CSelect
                        class="w-[300px]"
                        :options="dateFormats"
                        v-model="form.dateFormate"
                    />
                </td>
            </tr>
            <tr>
                <th class="font-medium text-sm text-right px-2">Currency Position : </th>
                <td class="flex items-center gap-4 px-4">
                    <CSelect
                        class="w-[300px]"
                        :options="currencyPosition"
                        v-model="form.currencyPosition"
                    />
                </td>
            </tr>
            <tr>
                <th class="font-medium text-sm text-right px-2">Stripe Public Key : </th>
                <td class="flex items-center gap-4 px-4">
                    <CInput 
                        class="w-[300px]"
                        type="text" 
                        placeholder="Enter public key" 
                        v-model="form.stripePublicKey"
                    />
                </td>
            </tr>
            <tr>
                <th class="font-medium text-sm text-right px-2">Stripe Privet Key : </th>
                <td class="flex items-center gap-4 px-4">
                    <CInput 
                        class="w-[300px]"
                        type="text" 
                        placeholder="Enter private key" 
                        v-model="form.stripePrivatKey"
                    />
                </td>
            </tr>
            <tr>
                <th class="font-medium text-sm text-right px-2"></th>
                <td class="flex items-center gap-4 px-4">
                    <button @click="handleSubmit" class="border px-4 mt-3 ml-auto mr-7 py-2 rounded bg-green-500 text-white font-medium">
                        Save
                    </button>
                </td>
            </tr>
        </table>
    </div>
</template>

<script setup>
import CInput from '@/Components/Global/CInput.vue'
import CSelect from '@/Components/Global/CSelect.vue'
import { Inertia } from '@inertiajs/inertia'
import { useForm, usePage } from '@inertiajs/inertia-vue3'
import { computed, onMounted, ref } from 'vue'

const dateFormats = [
    {
        key: '',
        value: '-select-'
    },
    {
        key: 'MMM Do, YYYY',
        value: 'ex: Feb 5th, 2021'
    },
    {
        key: 'MMMM Do YYYY',
        value: 'ex: February 5th 2021'
    },
    {
        key: 'LL',
        value: 'ex: February 5, 2021'
    },
    {
        key: 'll',
        value: 'ex: Feb 5, 2021'
    },
    {
        key: 'MMM Do YY',
        value: 'ex: Feb 5th 21'
    },
]

const currencyPosition = [
    {
        key: '',
        value: '-select-'
    },
    {
        key: 'left',
        value: 'Left'
    },
    {
        key: 'right',
        value: 'Right'
    },
]

const page = usePage();

const form = useForm({
    logo: '',
    companyName: '',
    commission: '',
    dateFormate: '',
    currencyPosition: '',
    stripePublicKey: '',
    stripePrivatKey: '',
})


const settings = computed(() => {
    return usePage().props.value.settings;
});
onMounted(()=> {
    let settings = page.props.value.settings;
    if (settings) {
        form.logo = settings.logo;
        form.companyName = settings.companyName;
        form.commission = settings.commission;
        form.dateFormate = settings.dateFormate;
        form.currencyPosition = settings.currencyPosition;
        form.stripePublicKey = settings.stripePublicKey;
        form.stripePrivatKey = settings.stripePrivatKey;
    }
});

const handleSubmit = () => {
    form.post(route('admin.saveSettings'))
}

</script>

<style lang="scss" scoped>

</style>
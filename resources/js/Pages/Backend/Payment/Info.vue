<template>
    <Master>
        <div class="px-4">
            <div class="container mx-auto py-5">
                <MemberCard
                    class="mx-auto"
                    :name="Helper.translate(talent.name)"
                    :designation="talent.email"
                    image="https://images.unsplash.com/photo-1619895862022-09114b41f16f?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MjF8fHVzZXJ8ZW58MHx8MHx8&auto=format&fit=crop&w=800&q=60"
                />

                <div class="flex gap-4 items-center py-3 font-bold mt-5">
                    <label class="flex gap-2 items-center cursor-pointer">
                        <input type="radio" v-model="form.type" value="myself" checked class="accent-black">
                        {{ Helper.translate('Myself') }}
                    </label>
                    <label class="flex gap-2 items-center cursor-pointer">
                        <input type="radio" v-model="form.type" value="someoneElse" name="who" class="accent-black">
                        {{ Helper.translate('Someone else') }}
                    </label>
                </div>
                
                <CInput v-if="form.type == 'myself'" v-model="form.name" placeholder="Enter your name" />
                <CInput v-if="form.type == 'someoneElse'" v-model="form.from" placeholder="From" />
                <CInput v-if="form.type == 'someoneElse'" v-model="form.for" placeholder="For" />

                <h3 class="mt-6 font-bold text-lg">{{ Helper.translate('Gender') }}</h3>
                <div class="flex gap-4 items-center pt-3">
                    <label class="flex gap-2 items-center cursor-pointer">
                        <input type="radio" v-model="form.gender" name="gander" value="female" class="accent-black">
                        {{ Helper.translate('Female') }}
                    </label>
                    <label class="flex gap-2 items-center cursor-pointer">
                        <input type="radio" v-model="form.gender" name="gander" value="male" class="accent-black">
                        {{ Helper.translate('Male') }}
                    </label>
                </div>

                <h3 class="mt-6 font-bold text-lg">{{ Helper.translate('Occasion') }}</h3>
                <CSelect v-model="form.occassion_id" :options="structured" />

                <h3 class="mt-6 font-bold text-lg">{{ Helper.translate('Instructions') }}</h3>
                <CTextarea v-model="form.instruction" placeholder="Write Instructions" characterLimit="500" rows="4" />

                <button @click="handleBefore" class="bg-[var(--btn-bg-color)] text-white px-6 py-2 rounded block max-w-fit mx-auto mt-4">
                    {{ Helper.translate('Continue to payment') }}
                </button>
            </div>
        </div>
    </Master>
</template>

<script setup>
import { onMounted, ref } from 'vue'
import CInput from '@/Components/Global/CInput.vue'
import CSelect from '@/Components/Global/CSelect.vue'
import CTextarea from '@/Components/Global/CTextarea.vue'
import MemberCard from '@/Components/Global/MemberCard.vue'
import { Link, useForm, usePage } from '@inertiajs/inertia-vue3';
import Master from '../Master.vue'
import Helper from '@/Helper'
import { map } from 'lodash'
import { Inertia } from '@inertiajs/inertia'

const props = defineProps({
    talent: {
        type: Object,
        default: {}
    },
    earning: {
        type: Object,
        default: {}
    },
    ocasions: {
        type: Array,
        default: []
    },
    type: String
});

const structured = ref([])

onMounted(()=> {
    let octn = map(props.ocasions, item => {
        return {
            key: item.id,
            value: item.name
        }
    });
    octn.unshift({
        key: null,
        value: 'Select ocasion'
    });
    structured.value = octn;
});

const form = useForm({
    type: 'myself',
    name: null,
    from: null,
    for: null,
    gender: null,
    occassion_id: null,
    instruction: null,
});
const getAmount = (amount, commission) => {
    return ((12/100) * amount) + amount;
}
function handleBefore(e) {
    // e.preventDefault();
    let data = {}
    data.type =form.type;
    if (form.type == 'myself') {
        data.name =form.name;
    } else {
        data.from =form.from;
        data.for =form.for;
    }
    data.gender =form.gender;
    data.occassion_id =form.occassion_id;
    data.instruction = form.instruction;
    data.payType = props.type;
    let amount = getAmount(props.earning.amount, Number(usePage().props.value.settings.commission));
    Helper.confirm(`You have to pay ${Helper.priceFormate(amount)}`, ()=>{
        localStorage.setItem('cashType', JSON.stringify(data));
        Inertia.get(route('payment.gateway', {id: props.talent.id, type: props.type}));
    });
}



</script>

<style lang="scss" scoped>

</style>
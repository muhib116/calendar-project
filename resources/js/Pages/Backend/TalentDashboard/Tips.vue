<template>
  <DashboardLayout>
    <template v-slot:leftSidebar>
        <LeftSide />
    </template>
    <template v-slot:content>
      <h1 class="font-semibold text-xl mb-4">{{ Helper.translate('Tips') }}</h1>
      <h2 class="text-lg">
          {{ Helper.translate('Please activate the') }} 
          <strong class="text-blue-500">Tips</strong>
          {{ Helper.translate('option to receive tips from your fans or followers') }}
      </h2>
      <div class="font-bold mt-10 grid">
        <h2 class="text-lg mb-2">{{ Helper.translate('Activate') }}</h2>
        <Switch @change="handleSave" v-model="form.status" />
      </div>
    </template>
  </DashboardLayout>
</template>

<script setup>
import DashboardLayout from '../DashboardLayout.vue'
import LeftSide from '@/Components/Backend/TalentDashboard/LeftSide.vue';
import Switch from '@/Components/Global/Switch.vue';
import { useForm, usePage } from '@inertiajs/inertia-vue3';
import { onMounted } from 'vue';
import { isEmpty } from 'lodash';
import Helper from '@/Helper';

// talent.tips.saveAmount


const form = useForm({
    status: 0,
    type: 'tips',
});

onMounted(()=> {
    let tips = usePage().props.value.tips;
    if (!isEmpty(tips)) {
        form.status = tips.status;
    }
})

const handleSave = () => {
    form.post(route('talent.tips.saveAmount'));
}
</script>


<style scoped>
  .content{
    grid-template-columns: 250px 1fr;
  }      
</style>
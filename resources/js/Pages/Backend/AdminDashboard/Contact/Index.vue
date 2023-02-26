<template>
    <Head title="Contact Management" />
    <DashboardLayout :header="false" :footer="false" title="Contact List">
        <template v-slot:leftSidebar>
            <LeftSide />
        </template>
        <template v-slot:content>
            <div>
                <div class="flex gap-4 justify-between items-center">
                    <div class="flex gap-2 items-center justify-between w-full">
                        <component :is="components['PageSize']" />
                        <component :is="components['Search']" class="ml-auto mr-0" />
                    </div>
                </div>
        
                <div class="flex flex-col mt-4">
                    <div class="overflow-x-auto">
                        <table class="w-full" v-if="!isEmpty(data)">
                            <thead class="border-b whitespace-nowrap">
                                <tr>
                                    <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                        #
                                    </th>
                                    <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                        {{ Helper.translate('Date') }}
                                    </th>
                                    <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                        {{ Helper.translate('Name') }}
                                    </th>
                                    <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                        {{ Helper.translate('Subject') }}
                                    </th>
                                    <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                        {{ Helper.translate('Email') }}
                                    </th>
                                    <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-right">
                                        {{ Helper.translate('Action') }}
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <Row v-for="(item, index) in resultPerPage" :key="item.id" :item="item" :index="index" />
                            </tbody>
                        </table>
                        <Alert v-if="isEmpty(data)" />
                    </div>
                    <component :is="components['Pagination']" />
                </div>
            </div>
        </template>
    </DashboardLayout>
</template>

<script setup>
import DashboardLayout from '../DashboardLayout.vue'
import LeftSide from '@/Components/Backend/AdminDashboard/LeftSide.vue'
import useTable from '@/Components/Backend/Global/Table/useTable.js'
import Alert from '@/Components/Global/Alert.vue'
import { Head } from '@inertiajs/inertia-vue3'
import Helper from '@/Helper.js'
import { isEmpty } from 'lodash'
import { onMounted } from 'vue'
import Row from '@/Components/Backend/AdminDashboard/Contact/Row.vue'

const { components, data, resultPerPage } = useTable()

onMounted(() => {
    data.value = [
        {
            created_at: '2023-02-25 17:52:11',
            name: 'Muhibbullah',
            subject: 'Test subject for design fix',
            email: 'test@gmail.com',
            message: "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.",
            seen: false
        },
        {
            created_at: '2023-02-25 17:52:11',
            name: 'Ansary Muhibbullah',
            subject: 'Test subject for design fix',
            email: 'test@gmail.com',
            message: "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.",
            seen: true
        }
    ]
})
</script>


<style scoped>
</style>
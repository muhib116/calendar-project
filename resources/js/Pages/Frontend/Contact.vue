<template>
    <Head title="Contact Us" />
    <Master>
        <div class="px-4">
            <div class="wrapper border max-w-screen-xl mt-24 px-8 grid gap-8 grid-cols-1 md:grid-cols-2 md:px-12 lg:px-16 xl:px-32 py-16 mx-auto bg-gray-100 text-gray-900 rounded-lg shadow-lg">
                <div class="flex flex-col justify-between">
                    <div>
                        <h2 class="text-4xl lg:text-5xl font-bold leading-tight">
                            {{ Helper.translate('Lets talk about everything!') }}
                        </h2>
                        <div class="text-gray-700 mt-8">
                            {{ Helper.translate('Hate forms? Send us an email instead.') }}
                        </div>
                    </div>
                    <div class="mt-8 text-center">
                        <SVGImage />
                    </div>
                </div>
                <div class="grid items-center">
                    <Form />
                </div>
            </div>
        </div>
    </Master>
</template>

<script setup>
import Master from "../Backend/Master.vue"
import { Head } from "@inertiajs/inertia-vue3"
import SVGImage from "@/Components/Frontend/Contact/SVGImage.vue"
import Form from "@/Components/Frontend/Contact/Form.vue"
import Helper from "@/Helper"


</script>


<style scoped>
.wrapper {
    background: linear-gradient(90deg, #0008 0%, transparent 50%);
}
</style>
<template>
    <div>
        <h1 class="text-lg">
            Please setup a <strong>yearly</strong> subscription price (min $30/year)
        </h1>

        <div class="grid grid-cols-2 gap-6">
            <div>
                <h2 class="font-bold mt-5">Enter Amount</h2>
                <div class="flex gap-10">
                    <CInput placeholder="Amount" class="w-full"/>
                    <button class="bg-red-500 text-white font-bold px-4 py-2 rounded">Update/Save</button>
                </div>
                <div class="grid items-center gap-2">
                    <h2 class="font-bold mt-5">Active</h2>
                    <Switch class="font-bold"/>
                </div>
            </div>
            <div>
                <div class="bg-red-100 h-full relative">
                    <label class="price absolute top-4 right-4 shadow bg-sky-500 font-bold p-2 rounded text-white cursor-pointer">
                        <CameraIcon />
                        <input type="file" hidden />
                    </label>
                    <img
                        class="block w-full h-[200px] object-cover object-center"
                        style="height: 250px;"
                        src="https://images.unsplash.com/photo-1673762482215-33acd768cb46?ixlib=rb-4.0.3&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=2250&amp;q=80">
                    <h2 class="absolute bottom-0 p-4 bg-white w-full bg-opacity-50 backdrop-blur-md font-semibold truncate cursor-pointer">
                        Please add a cover picture
                    </h2>
                </div>
            </div>
        </div>
    </div>
</template>

<script setup>
import CInput from '@/Components/Global/CInput.vue'
import Switch from '@/Components/Global/Switch.vue'
import CameraIcon from '@/Icons/CameraIcon.vue'

</script>

<style lang="scss" scoped>

</style>
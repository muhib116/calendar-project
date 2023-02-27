<template>
    <div class="flex gap-5 items-start">
        <div class="w-52 h-[330px] relative">
            <a href="calendar/edit/1">
                <div class=" _wrapper_mogvh_1 h-full relative" style="width: 200px; height: auto; pointer-events: none;">
                    <div class="_calendar_mogvh_9 shadow h-full" id="calendar_main_wrapper">
                        <img class="_back_image_mogvh_27 h-full w-full block object-cover object-center" src="http://127.0.0.1:8001/media/110-bb9f330c5caa837453be11d50f1fadc1-photo-1584293406330-efdc2a30a0a3.avif" alt="">
                    </div>
                    <div class="pointer-events-none react-draggable" style="transform: translate(0px, 0px);">
                        <textarea title="Double Click to Edit" class="pointer-events-auto absolute top-0 z-30 p-0 border-none text-left bg-transparent resize-none" name="title" readonly="" style="color: rgb(0, 0, 0); text-align: center; font-weight: 400; text-decoration: none; x: 0px; y: 0px;"></textarea>
                    </div>
                </div>
                <h1>

                </h1>
            </a>
        </div>
        <label>
            $ <input type="number" min="0" class="py-1 border-gray-300 bg-transparent" value="0">
        </label>
        <div class="flex gap-4 items-baseline">
            <button class="px-4 py-1 bg-green-500 rounded shadow">Update</button>
            <button class="px-4 py-1 bg-red-500 text-white rounded shadow">Delete</button>
            <label class="flex gap-2 items-center cursor-pointer">
                <input type="radio" name="saleable" checked="">
                Move to profile
            </label>
        </div>
    </div>
</template>

<script setup>
    defineProps({
        item: Object
    })
</script>

<style lang="scss" scoped>

</style>
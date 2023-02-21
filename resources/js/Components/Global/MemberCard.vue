<template>
    <div class="border border-black border-opacity-20 rounded px-6 py-3 shadow-lg flex gap-4 items-center min-w-[350px] max-w-fit">
        <span class="font-black text-white w-10 h-10 grid content-center justify-center rounded-full p-2 text-xs cursor-pointer uppercase bg-blue-500">
            {{ getTwoLatterOfName(name) }}
        </span>
        <div class="">
            <h1 class="font-bold text-xl">{{ name }}</h1>
            <h2 class="text-gray-500 italic">{{ designation }}</h2>
        </div>
    </div>
</template>

<script setup>
    defineProps({
        name: String,
        designation: String,
        image: String
    })

    const getTwoLatterOfName = (name) => {
        name = name.split(' ')
        if(name.length>1){
            return name[0][0]+name[1][0]
        }
        return name[0][0]+name[0][1]
    }
</script>
<template>
    <Master>
        <div class="px-4">
            <div class="container mx-auto py-5">
                <MemberCard
                    class="mx-auto"
                    name="Muhibbullah Ansary"
                    designation="Front Developer"
                    image="https://images.unsplash.com/photo-1619895862022-09114b41f16f?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MjF8fHVzZXJ8ZW58MHx8MHx8&auto=format&fit=crop&w=800&q=60"
                />

                <div class="flex gap-4 items-center py-3 font-bold">
                    <label class="flex gap-2 items-center cursor-pointer">
                        <input type="radio" name="who" checked class="accent-black">
                        Myself
                    </label>
                    <label class="flex gap-2 items-center cursor-pointer">
                        <input type="radio" name="who" class="accent-black">
                        Someone else
                    </label>
                </div>

                <h3 class="mt-6 font-bold text-lg">Name</h3>
                <CInput placeholder="Write your name" />
                <CInput placeholder="For" />
                <CInput placeholder="From" />

                <h3 class="mt-6 font-bold text-lg">Gender</h3>
                <div class="flex gap-4 items-center py-3">
                    <label class="flex gap-2 items-center cursor-pointer">
                        <input type="radio" name="gander" class="accent-black">
                        Female
                    </label>
                    <label class="flex gap-2 items-center cursor-pointer">
                        <input type="radio" name="gander" class="accent-black">
                        Male
                    </label>
                    <label class="flex gap-2 items-center cursor-pointer">
                        <input type="radio" name="gander" class="accent-black">
                        Others
                    </label>
                </div>

                <h3 class="mt-6 font-bold text-lg">Occasion</h3>
                <CSelect :options="['Select', 'New year', 'Birthday']" />

                <h3 class="mt-6 font-bold text-lg">Instructions</h3>
                <CTextarea placeholder="Write Instructions" characterLimit="20" rows="4" />

                <Link :href="route('payment.gateway')" class="bg-[var(--btn-bg-color)] text-white px-6 py-2 rounded block max-w-fit mx-auto mt-4">
                    Continue to payment
                </Link>
            </div>
        </div>
    </Master>
</template>

<script setup>
import CInput from '@/Components/Global/CInput.vue'
import CSelect from '@/Components/Global/CSelect.vue'
import CTextarea from '@/Components/Global/CTextarea.vue'
import MemberCard from '@/Components/Global/MemberCard.vue';
import { Link } from '@inertiajs/inertia-vue3';
import Master from '../Master.vue'
</script>

<style lang="scss" scoped>

</style>
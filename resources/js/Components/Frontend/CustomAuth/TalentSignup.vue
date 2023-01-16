<template>
    <div class="py-6">
        <div class="flex gap-5 justify-between">
            <CInput type="text" placeholder="First name" v-model="registrationPayload.firstName" class="w-full mb-6" />
            <CInput type="text" placeholder="Last name" v-model="registrationPayload.lastName" class="w-full mb-6" />
        </div>

        <div class="flex gap-5 justify-between">
            <CInput type="text" placeholder="Username (Known as)" v-model="registrationPayload.username" class="w-full mb-6" />
            <CInput type="email" placeholder="Email" v-model="registrationPayload.email" class="w-full mb-6" />
        </div>

        <div class="flex gap-5 justify-between">
            <CSelect v-model="registrationPayload.country" :options="countries" class="w-full mb-6" />
            <CSelect v-model="registrationPayload.category" :options="categories" class="w-full mb-6" />
        </div>

        <CInput type="url" placeholder="Link" v-model="registrationPayload.link" class="w-full mb-6" />

        <p class="text-gray-500 mb-1">Verification: please upload a 5-10 sec video of yourself</p>
        <div class="fileUpload mb-4">
            <input class="block w-full text-sm text-gray-900 border border-gray-400 p-2 rounded cursor-pointer bg-white focus:outline-none" aria-describedby="file_input_help" id="file_input" type="file">
            <p class="mt-1 text-sm text-gray-500 dark:text-gray-400" id="file_input_help">SVG, PNG, JPG or GIF (MAX. 800x400px).</p>
        </div>

        <label class="flex items-center gap-2 select-none">
            <input type="checkbox" v-model="registrationPayload.accept" />
            <div>
                I certify that I am at least 18 years old. I have read and I agree to the 
                <a href="#" class="text-[var(--link-color)]">Terms of service</a> 
                and <a href="#" class="text-[var(--link-color)]">Privacy policy</a>.
            </div>
        </label>

        <p class="mt-5 opacity-60">Please allow us, upto 72 hours to process your application.</p>
        <button @click="step=2" class="bg-[var(--btn-bg-color)] text-[var(--btn-text-color)] rounded-full px-5 py-2 shadow uppercase ml-auto block mt-4">
            SEND
        </button>
    </div>
</template>

<script setup>
import { ref } from 'vue'
import CInput from '@/Components/Global/CInput.vue'
import CSelect from '@/Components/Global/CSelect.vue'
const registrationPayload = ref({
    firstName: null,
    lastName: null,
    username: null,
    email: null,
    country: null,
    category: null,
    link: null,
    password: null,
    accept: true
})

const countries = ["Afghanistan","Albania","Algeria","Andorra","Angola","Anguilla","Antigua & Barbuda","Argentina","Armenia","Aruba","Australia","Austria","Azerbaijan","Bahamas" ,"Bahrain","Bangladesh","Barbados" ,"Belarus","Belgium" ,"Belize","Benin","Bermuda" ,"Bhutan","Bolivia","Bosnia & Herzegovina" ,"Botswana","Brazil" ,"British Virgin Islands" ,"Brunei","Bulgaria","Burkina Faso","Burundi","Cambodia","Cameroon","Canada" ,"Cape Verde","Cayman Islands" ,"Chad","Chile" ,"China","Colombia","Congo" ,"Cook Islands","Costa Rica" ,"Cote D Ivoire","Croatia" ,"Cruise Ship","Cuba","Cyprus" ,"Czech Republic","Denmark" ,"Djibouti","Dominica" ,"Dominican Republic","Ecuador","Egypt" ,"El Salvador","Equatorial Guinea" ,"Estonia","Ethiopia","Falkland Islands" ,"Faroe Islands","Fiji" ,"Finland","France" ,"French Polynesia","French West Indies" ,"Gabon","Gambia","Georgia" ,"Germany","Ghana" ,"Gibraltar","Greece","Greenland" ,"Grenada","Guam","Guatemala" ,"Guernsey","Guinea" ,"Guinea Bissau","Guyana","Haiti" ,"Honduras","Hong Kong","Hungary" ,"Iceland","India" ,"Indonesia","Iran","Iraq" ,"Ireland","Isle of Man" ,"Israel","Italy" ,"Jamaica","Japan" ,"Jersey","Jordan" ,"Kazakhstan","Kenya" ,"Kuwait","Kyrgyz Republic" ,"Laos","Latvia" ,"Lebanon","Lesotho" ,"Liberia","Libya" ,"Liechtenstein","Lithuania" ,"Luxembourg","Macau" ,"Macedonia","Madagascar" ,"Malawi","Malaysia" ,"Maldives","Mali" ,"Malta","Mauritania" ,"Mauritius","Mexico" ,"Moldova","Monaco" ,"Mongolia","Montenegro" ,"Montserrat","Morocco" ,"Mozambique","Namibia" ,"Nepal","Netherlands" ,"Netherlands Antilles","New Caledonia" ,"New Zealand","Nicaragua" ,"Niger","Nigeria" ,"Norway","Oman" ,"Pakistan","Palestine" ,"Panama","Papua New Guinea" ,"Paraguay","Peru" ,"Philippines","Poland" ,"Portugal","Puerto Rico" ,"Qatar","Reunion" ,"Romania","Russia" ,"Rwanda","Saint Pierre & Miquelon" ,"Samoa","San Marino" ,"Satellite","Saudi Arabia" ,"Senegal","Serbia" ,"Seychelles","Sierra Leone" ,"Singapore","Slovakia" ,"Slovenia","South Africa" ,"South Korea","Spain" ,"Sri Lanka","St Kitts & Nevis" ,"St Lucia","St Vincent" ,"St. Lucia","Sudan" ,"Suriname","Swaziland" ,"Sweden","Switzerland" ,"Syria","Taiwan" ,"Tajikistan","Tanzania" ,"Thailand","Timor L'Este" ,"Togo","Tonga" ,"Trinidad & Tobago","Tunisia" ,"Turkey","Turkmenistan" ,"Turks & Caicos","Uganda" ,"Ukraine","United Arab Emirates" ,"United Kingdom","United States" ,"United States Minor Outlying Islands","Uruguay" ,"Uzbekistan","Venezuela" ,"Vietnam","Virgin Islands (US)" ,"Yemen","Zambia","Zimbabwe"];
const categories = [
    {
        key: 1,
        value: 'Actors'
    },
    {
        key: 2,
        value: 'Singer'
    },
]
</script>

<style lang="scss" scoped>

</style>
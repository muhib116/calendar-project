<template>
    <Master>
        <div class="px-4">
            <div class="container mx-auto py-5">
                <div class="grid content min-h-[80vh]">
                    <div class="border p-4">
                        <LeftSide />
                    </div>
                    <div class="border border-l-0 p-4">
                        <h1 class="font-semibold text-xl mb-4">Tips</h1>
                        <h2 class="text-lg">
                            Please activate the 
                            <strong class="text-blue-500">Tips</strong>
                            option to receive tips from your fans or followers
                        </h2>
                        <div class="font-bold">
                            <input type="radio" name="rdo" id="yes" checked />
                            <input type="radio" name="rdo" id="no"/>
                            <div class="switch">
                            <label for="yes">Yes</label>
                            <label for="no">No</label>
                            <span></span>
                            </div>
                        </div>
  
                    </div>
                </div>
            </div>
        </div>
    </Master>
</template>

<script setup>
    import Master from '../Master.vue'
    import LeftSide from '@/Components/Backend/Account2/LeftSide.vue';
</script>


<style scoped>
    .content{
        grid-template-columns: 250px 1fr;
    }
    .switch {
        position: absolute;
        top: 50%;
        left: 50%;
        width: 150px;
        height: 50px;
        text-align: center;
        margin: -30px 0 0 -75px;
        background: #3e9b3c;
        -webkit-transition: all 0.2s ease;
        -moz-transition: all 0.2s ease;
        -o-transition: all 0.2s ease;
        -ms-transition: all 0.2s ease;
        transition: all 0.2s ease;
        border-radius: 25px;
      }
      .switch span {
        position: absolute;
        width: 20px;
        height: 4px;
        top: 50%;
        left: 50%;
        margin: -2px 0px 0px -4px;
        background: #fff;
        display: block;
        -webkit-transform: rotate(-45deg);
        -moz-transform: rotate(-45deg);
        -o-transform: rotate(-45deg);
        -ms-transform: rotate(-45deg);
        transform: rotate(-45deg);
        -webkit-transition: all 0.2s ease;
        -moz-transition: all 0.2s ease;
        -o-transition: all 0.2s ease;
        -ms-transition: all 0.2s ease;
        transition: all 0.2s ease;
        border-radius: 2px;
      }
      .switch span:after {
        content: "";
        display: block;
        position: absolute;
        width: 4px;
        height: 12px;
        margin-top: -8px;
        background: #fff;
        -webkit-transition: all 0.2s ease;
        -moz-transition: all 0.2s ease;
        -o-transition: all 0.2s ease;
        -ms-transition: all 0.2s ease;
        transition: all 0.2s ease;
        border-radius: 2px;
      }
      input[type=radio] {
        display: none;
      }
      .switch label {
        cursor: pointer;
        color: rgba(0,0,0,0.2);
        width: 60px;
        line-height: 50px;
        -webkit-transition: all 0.2s ease;
        -moz-transition: all 0.2s ease;
        -o-transition: all 0.2s ease;
        -ms-transition: all 0.2s ease;
        transition: all 0.2s ease;
      }
      label[for=yes] {
        position: absolute;
        left: 0px;
        height: 20px;
      }
      label[for=no] {
        position: absolute;
        right: 0px;
      }
      #no:checked ~ .switch {
        background: #ff3b30;
      }
      #no:checked ~ .switch span {
        background: #fff;
        margin-left: -8px;
      }
      #no:checked ~ .switch span:after {
        background: #fff;
        height: 20px;
        margin-top: -8px;
        margin-left: 8px;
      }
      #yes:checked ~ .switch label[for=yes] {
        color: #fff;
      }
      #no:checked ~ .switch label[for=no] {
        color: #fff;
      }
      
</style>
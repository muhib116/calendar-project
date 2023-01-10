<template>
    <footer class="bg-[var(--footer-bg-color)] text-white px-4 text-sm py-2 footerOuterWrapper">
        <div class="footerWrapper container mx-auto flex gap-4 justify-between items-center flex-wrap">
            <div class="links flex gap-[5px] md:gap-2 flex-wrap">
                <a class="opacity-60 hover:opacity-100" href="#">Categories</a>
                <a class="opacity-60 hover:opacity-100" href="#">FAQ</a>
                <a class="opacity-60 hover:opacity-100" href="#">Terms</a>
                <a class="opacity-60 hover:opacity-100" href="#">Privacy</a>
                <a class="opacity-60 hover:opacity-100" href="#">Contact</a>
            </div>
            <div class="opacity-60">
                &copy; 2023 copyright: <strong>Company Name</strong>
            </div>
        </div>
    </footer>
</template>

<script setup>

</script>

<style scoped>
    @media all and (max-width: 580px){
        .footerOuterWrapper{
            padding-top: 25px;
            padding-bottom: 25px;
        }
        .footerWrapper{
            justify-content: center;
        }
        .footerWrapper .links{
            justify-content: center;
        }
    }
</style>
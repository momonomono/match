<template>
    <div class="l-main">
        <div class="p-mypage">
            <SideBar />

            <MypageContent />
        </div>
    </div>
</template>

<script>
    import SideBar from "../components/mypage/SideBar.vue";

    export default{
        components:{
            SideBar
        }
    }
</script>
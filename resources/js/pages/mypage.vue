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
    import MypageContent from "../components/mypage/MypageContent.vue";

    export default{
        components:{
            SideBar,
            MypageContent
        }
    }
</script>
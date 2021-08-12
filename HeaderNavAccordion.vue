// ナビゲーションのアコーディオンメニュー化した項目

<template>
    <li class="p-header__item" >
        <p>{{ categoryName}}</p>
        
        <ul class="p-accordion" v-show="showFlg">
            <li v-for="(item,index) in items" :key="index" class="p-accordion__item">
                <a >{{ item.linkName}}</a>
            </li>
        </ul>
    </li>
</template>

<script>
    export default {
        props :{
            categoryName :{
                type :String,
                required : true
            },
            items :{
                required :true
            },
        },
        data : function(){
            return {
                showFlg : false
            }
        },
        methods :{
            clickChangeShowFlg(){
                
            }
        }
    };
</script>
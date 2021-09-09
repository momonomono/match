// 案件種別
<template>
    <section class="u-mb-50">

        <div class="c-grid__jobpost">

            <!-- タイトル -->
            <p class="c-text__label p-jobpost__title u-mb-10">
                案件種別
            </p>

            
            <!-- ラジオボタン -->
            <div class="p-jobpost__content ">
                
                <!-- 単発案件用ラジオボタン -->
                <label class="p-jobpost__label">
                    <input 
                        class="p-jobpost__radio" 
                        type="radio"
                        name="attr"
                        value="0"
                        @click="clickSingleRadio"
                        checked
                    />
                    <p>単発</p>
                </label>
                

                <!-- レバニューシェア用ラジオボタン -->
                <label class="p-jobpost__label">
                    <input
                        class="p-jobpost__radio"
                        type="radio"
                        name="attr"
                        value="1"
                        @click="clickShareRadio"
                    />
                    <p>レバニューシェア</p>
                </label>

            </div>

        </div>
    </section>
</template>

<script>
    export default{
        props:{
            inputData:{
                type : Object
            }
        },
        methods :{
            clickSingleRadio(){
                this.$emit('change-attr-type',false);
            },
            clickShareRadio(){
                this.$emit('change-attr-type',true);
            }
        }
    }
</script>
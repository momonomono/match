<template>
    <div class="l-container">
        <div class="p-jobpost">
            <form method="post">

                <!-- csrf -->
                <InputCSRF />


                <!-- title -->
                <SectionTitle 
                    :errMsg = "errMsg['title']"
                />

                <!-- attr -->
                <SectionAttr 
                    @change-attr-type = "changeAttrType"
                />


                <!-- price -->
                <SectionPrice 
                    :attrType = "attrType"
                />

                <!-- textarea -->
                <SectionTextarea 
                    :errMsg = "errMsg['detail']"
                />


                <button class="c-button__form p-jobpost__button">投稿する</button>
            </form>

        </div>
    </div>
</template>

<script>
    import InputCSRF from "../components/InputCSRF.vue";
    import SectionTitle from "../components/jobPost/SectionTitle.vue";
    import SectionAttr from "../components/jobPost/SectionAttr.vue";
    import SectionPrice from "../components/jobPost/SectionPrice.vue";
    import SectionTextarea from "../components/jobPost/SectionTextarea.vue";

    export default {
        props :{
            errMsg :{
                required :false,
                test : {
                    required : false
                }
            }
        },
        data :function(){
            return {
                attrType :false
            }
        },
        methods :{
            changeAttrType(value){
                this.attrType = value;
            }
        },
        components :{
            InputCSRF,
            SectionTitle,
            SectionAttr,
            SectionPrice,
            SectionTextarea
        }
    };
</script>
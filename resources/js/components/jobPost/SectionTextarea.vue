<template>
    <section class="u-mb-50">

        <!-- テキストエリア -->
        <div class="c-grid__jobpost">

            <p class="p-jobpost__title u-mb-20">内容</p>
            
            <textarea 
                class="c-input__text p-jobpost__textarea"
                name="detail"
                :class = "changeErrText"
            ></textarea>
        </div>

        <!-- エラーメッセージ -->
        <div class="c-grid__errMsg">
            {{ errText }}
        </div>
    </section>
</template>

<script>
    export default{
        props :{
            errMsg :{
                Type : Array,
                required :false,
                default : ()=>[]
            }
        },
        data :function(){
            return {
                errText : ""
            }
        },
        computed :{
            checkErrMsg(){
                return this.errMsg.length !== 0;
            },
            changeErrText(){
                if(this.checkErrMsg){

                    const titleErrMsg = this.errMsg.shift();
                    this.errText = titleErrMsg;
                    return "c-input__err";
                }
            }
        }
    }
</script>
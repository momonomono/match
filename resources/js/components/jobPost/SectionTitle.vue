<template>
    <section class="u-mb-50">

        <div class="c-grid__jobpost">
            <p class="p-jobpost__title u-mb-10">タイトル</p>
            <input 
                type="text" 
                class="c-input__text p-jobpost__input"
                name="title"
            />
        </div>

        <div class="c-grid__errMsg">
            {{ errText }}
        </div>

    </section>
</template>

<script>
    export default{
        props :{
            errMsg :{
                required :false
            }
        },
        data :function(){
            return {
                errText : ""
            }
        },
        
        computed :{
            checkExitErrMsg(){

                return this.errMsg.length == 0;
            },
            changeErrText(){
                if(!this.checkExitErrMsg){

                    const titleErrMsg = this.errMsg.shift();
                    this.errText = titleErrMsg;
                    return "";
                }
            }
        }
    }
</script>
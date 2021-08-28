<template>

  <label class="u-block u-mb-10">
        <p class="c-text__label u-mb-10">{{ title }}</p>
        <input
            class = "p-form__input c-input__text"
            :type = "formType"
            :class = "changeBorderErrInputbox"
            :name = "formName"
            :value = "value"
        />
        <div class="c-grid__errMsg">
            <p>{{ errText }}</p>
        </div>
  </label>

</template>

<script>
    export default{
        props :{
            title : {
                type : String,
                required : true
            },
            formName :{
                type : String,
                required : true
            },
            errMsg :{
                required :false
            },
            formType:{
                type : String,
                reuqired : true
            },
            value :{
                required :false
            }
        },
        data : function(){
            return {
                errText : ""
            }
        },
        computed :{
            checkErrMsg(){
                return this.errMsg == null;
            },
            changeBorderErrInputbox(){
                if(!this.checkErrMsg){

                    this.errText = this.errMsg.shift();
                    return "c-input__err";
                }
                return "";
            }
        }
    }

</script>
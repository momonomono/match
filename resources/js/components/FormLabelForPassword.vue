<template>
  <label class="p-form__label">
    <p class="p-form__text">{{ title }}</p>
    <input
      class="p-form__input c-input__form"
      type="password"
      :class="changeBorderErrInputbox"
      :name="formName"
    />
    <p class="p-form__errMsg">{{ errText }}</p>
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
<template>
    <div class="l-form-container">
        <section class="p-form">
            <div class="p-form__container">
                <form method="post">
                    <input type="hidden" name="_token" :value="csrf">
                    
                    <h2 class="p-form__title">認証キー入力</h2>

                    <FormLabel 
                        title = "メールアドレス"
                        formName = "email"
                        :errMsg = "errMsg['email']"
                        :value = "oldEmail"
                    />

                    <FormLabel 
                        title = "認証キー"
                        formName = "hashKey"
                        :errMsg = "errMsg['hashKey']"
                        :value = "oldEmail"
                    />

                    <button class="p-form__button c-button__form">
                        送信
                    </button>
                </form>
            </div>
        </section>
    </div>
</template>

<script>
    import FormLabel from "../components/FormLabel.vue";

    export default{
        props :{
            errMsg:{
                require : false
            },
            old :{
                require : false
            },
        },
        data :function(){
            return {
                csrf : document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                oldEmail : this.old.email,
                userName : this.test,
            }
        },
        components :{
            FormLabel
        }
    }
</script>
</template>
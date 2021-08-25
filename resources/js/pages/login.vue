<template>
    <div class="l-container">
        <section class="p-form">
            <div class="p-form__container">
                <form method="post" class="u-mb-40">
                    <input type="hidden" name="_token" :value="csrf">

                    <h1 class="p-form__title c-text__title">ログイン</h1>

                    <div class="c-grid__errMsg p-form__errMsg u-mb-20" v-show="showMessage">
                        <p>メールアドレスかパスワードが違います</p>
                    </div>

                    <!-- メールアドレス -->
                    <FormLabel
                        title = "メールアドレス"
                        formName = "email"
                        :errMsg = "errMsg['email'] "
                        :value = "oldEmail"
                        :formType = "text"
                    />

                    <!-- パスワード -->
                    <FormLabel
                        title = "パスワード"
                        formName = "password"
                        :errMsg = "errMsg['password']"
                        :formType = "password"
                    />

                    <div class="p-form__loginSave u-mb-50">
                        <input type="checkbox" name="remember_token" class="p-form__checkBox c-input__checkBox">
                        <p>ログインを保存する</p>
                    </div>


                    <button class="p-form__button c-button__form">
                        ログイン
                    </button>

                </form>

                <div class="p-form__reminder">
                    <a :href="'reminder'">&gt;&gt;パスワードを忘れた方はこちら</a>
                </div>
            </div>

        </section>
    </div>
</template>

<script>
    import FormLabel from "../components/FormLabel.vue";
    import FormLabelForPassword from "../components/FormLabelForPassword";

    export default{
        props :{
            errMsg :{
                required : true
            },
            old : {
                requied :false
            },
            showMessage : {
                require :false,
                default : ""
            }
        },
        data :function(){
            return {
                csrf : document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                oldEmail : this.old.email,
            }
        },
        components :{
            FormLabel,
            FormLabelForPassword
        }
    }
</script>
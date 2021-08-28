<template>
    <div class="l-container">
        <section class="p-form">
            <div class="p-form__container">
                <form method="post">

                    <input type="hidden" name="_token" :value="csrf">

                    <h1 class="p-form__title c-text__title">
                      ユーザー登録
                    </h1>

                    <div class="c-grid__errMsg p-form__errMsg u-mb-20" v-show="showMessage">
                        <p>入力されたメールアドレスは既に使われています</p>
                    </div>

                    <FormLabel
                        title = "メールアドレス"
                        formName = "email"
                        :errMsg = "errMsg['email']"
                        :value = "oldEmail"
                    />

                    <FormLabel
                        title = "パスワード"
                        formName = "password"
                        formType = "password"
                        :errMsg = "errMsg['password']"
                    />

                    <FormLabel
                        title = "パスワード(確認)"
                        formName = "password_confirmation"
                        formType = "password"
                    />

                    <button class="p-form__button c-button__form">
                        登録
                    </button>

                </form>
            </div>
        </section>
    </div>
</template>

<script>
import FormLabel from "../components/FormLabel.vue";

export default {
  props: {
    errMsg: {
      required: true,
    },
    old: {
      required: false,
    },
    showMessage:{
      required : false
    }
  },
  data: function () {
    return {
      csrf: document
        .querySelector('meta[name="csrf-token"]')
        .getAttribute("content"),
      oldEmail: this.old.email,
    };
  },
  components: {
    FormLabel,
  },
};
</script>
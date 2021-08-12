<template>
    <div class="l-form-container">
        <section class="p-form">
            <div class="p-form__container">
                <form method="post">

                    <input type="hidden" name="_token" :value="csrf">

                    <h2 class="p-form__title">ユーザー登録</h2>

                    <FormLabel
                        title = "メールアドレス"
                        formName = "email"
                        :errMsg = "errMsg['email']"
                        :value = "oldEmail"
                    />

                    <FormLabelForPassword
                        title = "パスワード"
                        formName = "password"
                        :errMsg = "errMsg['password']"
                    />

                    <FormLabelForPassword
                        title = "パスワード(確認)"
                        formName = "password_confirmation"
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
import FormLabelForPassword from "../components/FormLabelForPassword.vue";

export default {
  props: {
    errMsg: {
      required: true,
    },
    old: {
      required: false,
    },
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
    FormLabelForPassword,
  },
};
</script>
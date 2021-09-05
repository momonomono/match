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
                

                <section class="p-jobpost__section c-grid__jobpost u-mb-50">
                    <p class="c-text__label p-jobpost__title">金額</p>

                    <div class="p-jobpost__content">
                        <input
                            type="number"
                            class="c-input__number p-jobpost__number"
                            min="0"
                            step="1000"
                            name
                        />
                    </div>
                </section>

                <section class="u-mb-50">
                    <p class="c-text__label p-jobpost__title u-mb-20">内容</p>
                    <textarea class="c-input__text p-jobpost__textarea"></textarea>
                </section>

                <button class="c-button__form p-jobpost__button">投稿する</button>
            </form>

        </div>
    </div>
</template>

<script>
    import InputCSRF from "../components/InputCSRF.vue";
    import SectionTitle from "../components/jobPost/SectionTitle.vue";
    import SectionAttr from "../components/jobPost/SectionAttr.vue";

    export default {
        props :{
            errMsg :{
                required :false
            }
        },
        components :{
            InputCSRF,
            SectionTitle,
            SectionAttr
        }
    };
</script>
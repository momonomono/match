<template>
    <div class="l-container">
        <div class="p-jobpost">
                <section class="p-jobpost__section c-grid__jobpost u-mb-50">
                    <p class="c-text__label p-jobpost__title">タイトル</p>
                    <input type="text" class="c-input__text p-jobpost__input">
                </section>

            
                <section class="p-jobpost__section c-grid__jobpost u-mb-50">
                    <p class="c-text__label p-jobpost__title">案件種別</p>
                    
                    <div class="p-jobpost__content">
                        <label class="p-jobpost__label">
                            <input class="p-jobpost__checkbox" type="checkbox" name="" id="" >
                            <p>レバニューシェア</p>
                        </label>

                        <label class="p-jobpost__label">
                            <input class="p-jobpost__checkbox" type="checkbox" name="" id="">
                            <p>単発</p>
                        </label>
                    </div>
                </section>


                <section class="p-jobpost__section c-grid__jobpost u-mb-50">
                    <p class="c-text__label p-jobpost__title">金額</p>

                    <div class="p-jobpost__content">
                        <input 
                            type="number"
                            class="c-input__number p-jobpost__number"
                            min="0"
                            step="1000"
                            name=""
                        >
                    </div>
                </section>

                <section class=" u-mb-50">
                    <p class="c-text__label p-jobpost__title u-mb-20">内容</p>
                    <textarea class="c-input__text p-jobpost__textarea"></textarea>
                </section>

                <button class="c-button__form p-jobpost__button">
                    投稿する
                </button>
        </div>
    </div>
</template>

<script>
    export default{

    }
</script>
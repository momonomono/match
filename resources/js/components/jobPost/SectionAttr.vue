<template>
    <section class="u-mb-50">

        <div class="c-grid__jobpost">

            <p class="c-text__label p-jobpost__title">案件種別</p>

            <div class="p-jobpost__content">

                <label class="p-jobpost__label">
                    <input 
                        class="p-jobpost__radio" 
                        type="radio"
                        name="attr"
                        value="0"
                    />
                    <p>単発</p>
                </label>
                

                <label class="p-jobpost__label">
                    <input
                        class="p-jobpost__radio"
                        type="radio"
                        name="attr"
                    />
                    <p>レバニューシェア</p>
                </label>

            </div>

        </div>
    </section>
</template>

<script>
    export default{

    }
</script>
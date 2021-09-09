<template>
    <section class="u-mb-50">
        <div class="c-grid__jobpost">

            <!-- タイトル -->
            <p class="c-text__label p-jobpost__title u-mb-10">
                金額
            </p>

            <div class="p-jobpost__content">
                <label class="p-jobpost__label">
                    <input
                        type="number"
                        class="c-input__number p-jobpost__number"
                        name="min_price"
                        min="0"
                        step="1000"
                        v-model = "min"
                        :disabled="attrType"
                    />
                    円
                </label>

                <p class="p-jobpost__text">~</p>

                <label class="p-jobpost__label">
                    <input
                        type="number"
                        class="c-input__number p-jobpost__number"
                        name="max_price"
                        min="0"
                        step="1000"
                        v-model = "max"
                        :disabled="attrType"
                    />
                    円
                </label>
            </div>
        </div>
    </section>
</template>

<script>
    export default{
        props :{
            attrType :{
                type :Boolean
            }
        },
        data :function(){
            return {
                min : 0,
                max : 0,
            }
        },
        watch :{
            min : function(newMin,oldMin){
                if(Number(newMin) > Number(this.max)){
                    this.max = newMin;
                }
            },
            max : function(newMax,oldMax){
                if(Number(newMax) < Number(this.min) ){
                    this.max = this.min;
                }
            }
        },
    }
</script>
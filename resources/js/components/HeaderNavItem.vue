<template>
  <li class="p-header__item">
        <a class="p-header__link" :href="link">{{ linkName }}</a>
  </li>
</template>

<script>
    export default {
        props :{
            link :{
                type : String,
                required :true
            },
            linkName :{
                type :String,
                required :true
            }
        }
    };
</script>
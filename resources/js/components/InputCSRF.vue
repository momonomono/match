<template>
    <input 
        type = "hidden"
        name = "_token"
        :value = "csrf"
    >
</template>

<script>
    export default{
        data : function(){
            return{
                csrf : document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
            }
        }
    }
</script>
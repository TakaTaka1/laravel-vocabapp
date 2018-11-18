<template>
   <div class="container">
       <strong>Success!</strong> {{ body }}
   </div>
</template>

<script>
   export default {

       data() {
           return {
               body: 'Hello World!'
           }
       },
       name:'original-component'
   }
</script>
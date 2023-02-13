<template>
    <div>
    <p>{{ thisInArrowFunc("Alauddin") }}</p>
    <p>{{ thisInRegularFunc() }}</p>
</div>
  </template>
  
  <script>
  export default {
    data(){
        return {
            username: "Enamul"
        }
    },
    methods: {
      
      thisInArrowFunc: (name) => {
        return 'Help us ' + name;  //no 'this' binding
      },
  
      thisInRegularFunc() {
        return 'Help us ' + this.username // global 'this'
      }
    }
  }
  </script>
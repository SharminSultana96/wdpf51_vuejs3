<template>
    <div> 
    <h1>{{ count }}</h1>
  <button v-on:click="increment">Click Here</button>
  </div>
 
</template>

<script>
export default {
    data(){
        return{
            count:0
        }
    },

    methods: {
        increment(){
            this.count++
        }
    },
    mounted(){
        this.increment()
        console.log(this.count)
    }
}
</script>

<style>

</style>
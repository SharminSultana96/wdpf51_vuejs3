<template>
    <div>
  <ol>
    <li v-for="(fr, i) in fruits" :key="i"> {{i}} -> {{ fr }}</li>
  </ol>
</div>
</template>

<script>
export default {
    data(){
        return{
            fruits: ["Mango", "Orange", "Apple", "grape"]
        }
    }
}
</script>

<style>

</style>
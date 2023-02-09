<template>
  <h1 v-if="score>=8">score is {{ score }}, Excellent</h1>
  <h1 v-else-if="score>=6">score is {{ score }}, Good</h1>
  <h1 v-else>Poor</h1>
</template>

<script>
export default {
  data(){
    return {
      score:6
    }
  }
}
</script>

<style>

</style>
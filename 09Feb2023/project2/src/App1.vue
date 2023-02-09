<template>
  <div>
  <h1 v-if="score>=8">score is {{ score }}, Excellent</h1>
  <h1 v-else-if="score>=6">score is {{ score }}, Good</h1>
  <h1 v-else>Poor</h1>

  <ul v-if="seen">
    <li>Apple</li>
    <li>Orange</li>
    <li>Mango</li>
  </ul>

  <hr>
  {{ ok ? 'Yes' : 'No' }}

</div>
</template>

<script>
export default {
  data(){
    return {
      score:6,
      seen:false,
      ok: false
    }
  }
}
</script>

<style>

</style>
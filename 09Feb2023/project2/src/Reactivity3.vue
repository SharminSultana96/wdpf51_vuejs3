<template>
    <div> 
    <h1>{{ obj.nested.count }}</h1>
    <p>{{ obj.arr }}</p>
    <button v-on:click="mutateDeeply">Click Here</button>
  
  </div>
 
</template>

<script>
export default {
  data() {
    return {
      obj: {
        nested: { count: 0 },
        arr: ['foo', 'bar']
      }
    }
  },
  methods: {
    mutateDeeply() {
      // these will work as expected.
      this.obj.nested.count++
      this.obj.arr.push('baz')
    }
  }
}
</script>

<style>

</style>
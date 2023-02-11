<template>
    <div>
  {{ name }}
  <button @click="name = 'Karim'">Click Here</button>
  <button @click="name = 'Sharmin'">Click Here</button>
  <button @click="setName('Tokey')">Name Change With Method</button>
<h1>{{ count }}</h1>
  <hr />
  <button @mouseover="count++">Increment</button>
  <button @mouseover="count--">Decrement</button>
  <button @mouseover="count += 5">count +5</button>
  <button @click="greet">GREET</button>
</div>
</template>

<script>
export default {
  data() {
    return {
      name: "Sharmin",
        count: 0,
    };
  },

  methods: {
    setName(x) {
      this.name = x;
    },

    greet(event){
        alert(`Hello ${this.name}`);
    }
  },
};
</script>

<style>
</style>
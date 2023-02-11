<template>
    <div>
    <div :class="classObject">Hello</div>
    <button @click="toggleActive">Toggle</button>
</div>
</template>

<script>
export default {
  data() {
    return {
      isActive: false,
      error: true,
    };
  },
  computed: {
    classObject() {
      return {
        active: this.isActive,
        error: this.error,
      };
    },
  },
  methods: {
    toggleActive(){
        this.isActive = !this.isActive;
        this.error = !this.error;
    },
  },
};
</script>

<style>
.active{
    color: green;
}
.error{
    color: red;
}
</style>
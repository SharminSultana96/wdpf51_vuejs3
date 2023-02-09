<template>
  <div>
    {{ firstName }} {{ lastName }}
    {{ fullName }}
    <button v-on:click="fullName('Sharmin Sultana')">Click Here</button>
    {{ fullName }}
  </div>
</template>

<script>
export default {
  data() {
    return {
      firstName: 'John',
      lastName: 'Doe'
    }
  },
  computed: {
    fullName: {
      // getter
      get() {
        return this.firstName + ' ' + this.lastName
      },
      // setter
      set(newValue) {
      
        [this.firstName, this.lastName] = newValue.split(' ')
      }
    }
  }
}
</script>

<style>

</style>
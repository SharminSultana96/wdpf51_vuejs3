<template>
    <div>
  {{author.books.length > 0 ? 'Yes' : 'No'  }}, {{ totalbooks }} Books

  {{ calculateBooks}}

  {{ now }}
</div>
</template>

<script>
export default {
  data() {
    return {
      author: {
        name: 'John Doe',
        books: [
          'Vue 2 - Advanced Guide',
          'Vue 3 - Basic Guide',
          'Vue 4 - The Mystery'
        ],
      },
    };
  },

  computed: {
    totalbooks(){
        return this.author.books.length;
    },

    now() {
    return Date.now()
  }
  },
  methods: {
  calculateBooksMessage() {
    return this.author.books.length > 0 ? 'Yes' : 'No'
  }
}
}
</script>

<style>

</style>
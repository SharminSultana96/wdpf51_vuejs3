<template>
  <div>
 <h1>Hello {{ name }}</h1>
 <p>Age: {{ age }},  Address: {{ address }}</p>
 <p v-text="address"></p>
 <div>{{ college }}</div>
 <div v-html="college"></div>
 <div v-bind:id="'dynamicId'">{{ address }}</div>
<div v-bind:class="{active: ifActive, error: !ifactive}">{{ address }}</div>
</div>
</template>

<script>
export default{
  data(){
    return {
      name: "Sharmin",
      age : 26,
      address: "Basabo",
      college: '<b>Chandpur Govt. college</b>',
      ifActive: false
    }
  }
}

</script>

<style>
.active{
color: blue;
}

.error{
  color: crimson;
}
#dynamicId{
color: green;
}

</style>
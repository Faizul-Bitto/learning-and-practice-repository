<script setup>
// importing the variables of 'data.js' file
import { msg, year, person, getDate } from './data/data.js';
</script>

<template>
  <!-- {{ }} -> 'Mustache Syntax' -->
  <h1>{{ msg }}</h1>
  <h2>Year is : {{ year }}</h2>
  <!-- even we can pass any function in this 'Mustache Syntax' and can show output -->
  <h2>Today is : {{ getDate() }}</h2>

  <!-- as like object value catching system -> objectVariable.value, just like this write in the 'Mustache Syntax' -->
  <h2>Name : {{ person.name }} Age : {{ person.age }}</h2>

  <h2>You have total {{ person.tasks.length }} tasks today</h2>

  <h2>Most important task is {{ person.tasks[0] }}</h2>
</template>

<style scoped></style>

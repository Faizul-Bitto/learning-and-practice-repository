<script setup>

import { data } from './data/data.js';

// const message = "Welcome. Get ready to master Vue.js 3!"
// // static date
// const date = "23rd March, 2025"

// // dynamic date
// function getDate () {
//   const date = new Date();
//   return date.toDateString();
// }

// // object declaration
// const data = {
//   message: "Welcome. Get ready to master Vue.js 3!",
//   date: "23rd March, 2025",
//   tasks: [ 1, 2, 3, 4, 5 ],
//   tasks2: [ 1, 2, 'no', 4, 5 ]
// }
</script>

<!-- hard coded -->
<!-- <template>
  <div class="container mx-auto flex items-center justify-center min-h-screen flex-col">
    <h1 class="text-2xl">Welcome. Get ready to master Vue.js 3!</h1>
    <h2 class="mt-10 text-xl text-grey-700">Today is <span>23rd March, 2025</span></h2>
  </div>
</template> -->


<!-- dynamic from variables -->
<!-- <template>
  <div class="container mx-auto flex items-center justify-center min-h-screen flex-col">
    <h1 class="text-2xl">{{ message }}</h1>
    <h2 class="mt-10 text-xl text-gray-700">{{ getDate() }}</h2>
  </div>
</template> -->

<!-- dynamic from object -->
<!-- <template>
  <div class="container mx-auto flex items-center justify-center min-h-screen flex-col">
    <h1 class="text-2xl">{{ data.message }}</h1>
    <h2 class="mt-10 text-xl text-gray-700">{{ data.date }}</h2>
    <h3 class="mt-10 text-xl text-gray-700"> You have total <span>{{ data.tasks.length }}</span> tasks for today</h3>
    <h3 class="mt-10 text-xl text-gray-700"> Congratulations, you have done your tasks</h3>
    <h3 class="mt-10 text-xl text-gray-700">So, you have <span>{{ data.tasks2[2] }}</span> tasks for today</h3>
  </div>
</template> -->

<template>
  <div class="container mx-auto flex items-center justify-center min-h-screen flex-col">
    <h1 class="text-2xl">{{ data.message }}</h1>
    <h2 class="mt-10 text-xl text-gray-700">{{ data.date }}</h2>
    <h3 class="mt-10 text-xl text-gray-700"> You have total <span>{{ data.tasks.length }}</span> tasks for today</h3>
    <h3 class="mt-10 text-xl text-gray-700"> Congratulations, you have done your tasks</h3>
    <h3 class="mt-10 text-xl text-gray-700">So, you have <span>{{ data.tasks2[2] }}</span> tasks for today</h3>
  </div>
</template>

<style scoped></style>

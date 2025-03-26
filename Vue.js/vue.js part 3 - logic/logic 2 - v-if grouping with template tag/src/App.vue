<script setup>
const location = "Dhaka";
const weather = "sunny";
</script>

<template>

  <section class="container mx-auto flex items-center flex-col">

    <h1 class="text-center text-2xl py-10">Logic in Vue.js</h1>

    <div class="w-1/3 p-10 flex items-center flex-col space-y-10">

      <h1 class="text-3xl">Location : {{ location }}</h1>

      <!-- grouping  -->

      <!-- <div v-if="weather == 'sunny'">
        <h2 class="text-2xl">Weather : Sunny</h2>
        <img class="w-32" src=" ../src/assets/images/sun.png" alt="">
      </div>

      <div v-if="weather == 'partly cloudy'">
        <h2 class="text-2xl">Weather : Partly Cloudy</h2>
        <img class="w-32" src="../src/assets/images/cloudy.png" alt="">
      </div>

      <div v-if="weather == 'rainy'">
        <h2 class="text-2xl">Weather : Rainy</h2>
        <img class="w-32" src="../src/assets/images/rainy.png" alt="">
      </div>

      <div v-if="weather == 'thunderstorm'">
        <h2 class="text-2xl">Weather : Thunderstorm</h2>
        <img class="w-32" src="../src/assets/images/storm.png" alt="">
      </div> -->

      <!-- but for this div tag grouping, we can see the icons are not perfectly aligned in the center of the page -->



      <!-- so, to avoid this, we will use template tag, as we know without using any node, we cannot make grouping with v-if tag, cause a node like div, p etc. are must to make grouping. But, as we cannot use any node here, otherwise the alignment will break, we can use 'template' which is like a node, but behind the scene, it actually acts like an invisible node. If we inspect from the browser and see Elements section, we will see, there is nothing mentioned like template tag, that means it becomes invisible while rendering. We will just see, below, the 'h2' and 'img' tag are visible only -->
      <template v-if="weather == 'sunny'">
        <h2 class="text-2xl">Weather : Sunny</h2>
        <img class="w-32" src=" ../src/assets/images/sun.png" alt="">
      </template>

      <template v-if="weather == 'partly cloudy'">
        <h2 class="text-2xl">Weather : Partly Cloudy</h2>
        <img class="w-32" src="../src/assets/images/cloudy.png" alt="">
      </template>

      <template v-if="weather == 'rainy'">
        <h2 class="text-2xl">Weather : Rainy</h2>
        <img class="w-32" src="../src/assets/images/rainy.png" alt="">
      </template>

      <template v-if="weather == 'thunderstorm'">
        <h2 class="text-2xl">Weather : Thunderstorm</h2>
        <img class="w-32" src="../src/assets/images/storm.png" alt="">
      </template>

    </div>

  </section>

</template>

<style scoped></style>
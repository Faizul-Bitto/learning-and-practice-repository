<script setup>
import { ref } from 'vue';

const color = ref('lime');
const fontSize = ref('28');
</script>

<template>

  <button class="text-white font-bold py-2 px-4 rounded" :class="[
    `bg-${color}-500`,
    `hover:bg-${color}-700`
  ]" :style="[
    `font-size: ${fontSize}px`
  ]">
    Button
  </button>

  <div>
    <input type="text" v-model="color" placeholder="color">
    <input type="text" v-model="fontSize" placeholder="fontSize">
  </div>

</template>

<style scoped></style>

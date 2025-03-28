<script setup>
const bgOrange = 'bg-orange-500';
const bgIndigo = 'bg-indigo-500';
const bgGreen = 'bg-green-500';

const weekDay = true;
</script>

<template>
  <section class="container mx-auto">
    <h1 class="text-center text-3xl py-12">CSS Class and Style Binding</h1>

    <section class="flex space-x-10">
      <div class="w-1/3 h-16" :class="bgOrange"></div>
      <div class="w-1/3 h-16" :class="bgIndigo"></div>
      <div class="w-1/3 h-16" :class="bgGreen"></div>
    </section>

    <section class="mt-10">
      <div class="bg-red-600 h-16 flex items-center justify-center text-white"
        :class="[weekDay ? 'bg-green-600' : 'bg-red-600', weekDay ? 'text-4xl' : 'text-6xl']">
        It's a weekday
      </div>
    </section>

  </section>
</template>
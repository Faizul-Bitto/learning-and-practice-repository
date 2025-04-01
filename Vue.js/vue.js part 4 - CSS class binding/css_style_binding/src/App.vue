<script setup>
const bgOrange = 'bg-orange-500';
const bgIndigo = 'bg-indigo-500';
const bgGreen = 'bg-green-500';

const weekDay = true;

const messageType = 'error';

const colors1 = {
  bgColor: 'bg-teal-100',
  borderColor: 'border-teal-500',
  textColor: 'text-teal-900'
}

if ( 'error' == messageType ) {
  colors1.bgColor = 'bg-red-100';
  colors1.borderColor = 'border-red-500';
  colors1.textColor = 'text-red-900';
}
</script>

<template>
  <section class="container mx-auto">
    <h1 class="text-center text-3xl py-12">CSS Class Binding</h1>

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

    <section class="mt-10">
      <div class=" border-t-4 rounded-b px-4 py-3 shadow-md"
        :class="[colors1.bgColor, colors1.borderColor, colors1.textColor]">
        <p class="font-bold">Our privacy policy has changed</p>
        <p class="text-sm">Make sure you know how these changes affect you.</p>
      </div>
    </section>
  </section>
</template>
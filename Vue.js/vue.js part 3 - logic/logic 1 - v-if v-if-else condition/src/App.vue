<script setup>
const location = "Dhaka";
const weather = "partly cloudy";
</script>

<template>

    <section class="container mx-auto flex items-center flex-col">

        <h1 class="text-center text-2xl py-10">Logic in Vue.js</h1>

        <div class="w-1/3 p-10 flex items-center flex-col space-y-10">
            <h1 class="text-3xl">Location : {{ location }}</h1>

            <h2 class="text-2xl" v-if="weather == 'sunny'">Weather : Sunny</h2>
            <h2 class="text-2xl" v-else-if="weather == 'partly cloudy'">Weather : Partly Cloudy</h2>
            <h2 class="text-2xl" v-else-if="weather == 'rainy'">Weather : Rainy</h2>
            <h2 class="text-2xl" v-else-if="weather == 'thunderstorm'">Weather : Thunderstorm</h2>
            <h2 class="text-2xl" v-else> Weather : Cyclone </h2>

            <img v-if="weather == 'sunny'" src=" ../src/assets/images/sun.png" alt="">
            <img v-else-if="weather == 'partly cloudy'" src="../src/assets/images/cloudy.png" alt="">
            <img v-else-if="weather == 'rainy'" src="../src/assets/images/rainy.png" alt="">
            <img v-else-if="weather == 'thunderstorm'" src="../src/assets/images/storm.png" alt="">
        </div>

    </section>

</template>

<style scoped></style>
<script setup>

const location1 = 'Dhaka';

function changeLocation1 ( newLocation1 ) {
  alert( 'Button Clicked ' + newLocation1 );
};


// now let's make it reactive a single value with 'ref()'
import { ref } from 'vue';

const location2 = ref( 'Dhaka' );

function changeLocation2 ( newLocation2 ) {
  alert( `Button Clicked ${ newLocation2 }` );
  location2.value = newLocation2;
};

// now let's make it reactive a object with 'reactive()'
import { reactive } from 'vue';

const location3 = reactive( {
  name: 'Dhaka',
  country: 'Bangladesh',
  weather: 'sunny'
} );

function changeLocation3 ( newLocation3 ) {
  alert( `Button Clicked ${ newLocation3 }` );
  location3.name = newLocation3;
};
</script>

<template>

  <!--! this is not reactive -->

  <section class="container mx-auto flex items-center flex-col">
    <h1 class="text-center text-2xl py-10">Events & Reactivity in Vue.js (part 1)</h1>
    <div class="container mx-auto flex space-x-5 justify-center m-5">
      <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"
        @click="changeLocation1('Dhaka')">
        Dhaka
      </button>
      <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"
        @click="changeLocation1('Rajshahi')">
        Rajshahi
      </button>
      <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"
        @click="changeLocation1('Khulna')">
        Khulna
      </button>
    </div>
    <h1 class="text-2xl m-10">Current Location is {{ location1 }}</h1>
  </section>
  <hr>



  <!--! now let's make it reactive a single value with 'ref()' -->

  <section class="container mx-auto flex items-center flex-col">
    <h1 class="text-center text-2xl py-10">Events & Reactivity in Vue.js <u><b>with ref() method</b></u> for single
      value (part
      2)
    </h1>
    <div class="container mx-auto flex space-x-5 justify-center m-5">
      <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"
        @click="changeLocation2('Dhaka')">
        Dhaka
      </button>
      <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"
        @click="changeLocation2('Rajshahi')">
        Rajshahi
      </button>
      <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"
        @click="changeLocation2('Khulna')">
        Khulna
      </button>
    </div>
    <h1 class="text-2xl m-10">Current Location is {{ location2 }}</h1>
  </section>
  <hr>



  <!--! now let's make it reactive a single value with 'reactive()' -->

  <section class="container mx-auto flex items-center flex-col">
    <h1 class="text-center text-2xl py-10">Events & Reactivity in Vue.js <u><b>with reactive() method</b></u> for object
      (part
      3)</h1>
    <div class="container mx-auto flex space-x-5 justify-center m-5">
      <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"
        @click="changeLocation3('Dhaka')">
        Dhaka
      </button>
      <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"
        @click="changeLocation3('Rajshahi')">
        Rajshahi
      </button>
      <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"
        @click="changeLocation3('Khulna')">
        Khulna
      </button>
    </div>
    <h1 class="text-2xl m-10">Current Location is {{ location3.name }}</h1>
  </section>

</template>
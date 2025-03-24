<!-- <script setup>

import { ref } from 'vue';

let number = ref(500);

const add = () => {
  number.value = number.value + 1; // first catch the number variable and the with a dot, catch the value of that variable -> This is the format
}

const subtract = () => {
  number.value = number.value - 1; // first catch the number variable and the with a dot, catch the value of that variable -> This is the format
}

</script>

<template>
  <h1>{{ number }}</h1>
  <button @click="add"> + Plus</button>
  <button @click="subtract"> - Minus</button>
</template>

<style scoped></style> -->





<!-- <script setup>

import { ref } from 'vue';

let number = ref({
  num1: 500,
  num2: 100
});

const add = () => {
  number.value.num1 = number.value.num1 + 1; // প্রথমে number.value মানে হচ্ছে স্টেট টাকে ধরা। অর্থাৎ অব্জেক্ট টাকে ধরা। এরপর . দিয়ে সেই অব্জেক্ট এর ভ্যালু টাকে ধরা। এমনটা করার কারণ হল স্টেট টি হল একটা অব্জেক্ট।
  number.value.num2 = number.value.num2 - 1;
}

const subtract = () => {
  number.value.num2 = number.value.num2 + 1; // প্রথমে number.value মানে হচ্ছে স্টেট টাকে ধরা। অর্থাৎ অব্জেক্ট টাকে ধরা। এরপর . দিয়ে সেই অব্জেক্ট এর ভ্যালু টাকে ধরা। এমনটা করার কারণ হল স্টেট টি হল একটা অব্জেক্ট।
  number.value.num1 = number.value.num1 - 1;
}

</script>

<template>
  <h1>{{ number.num1 }}</h1>
  <h1>{{ number.num2 }}</h1>

  <button @click="add"> Click1 </button>
  <button @click="subtract"> Click2 </button>
</template>

<style scoped></style> -->

<!-- <script setup>

import { reactive } from 'vue';

let number = reactive({
  num1: 500,
  num2: 100
});

const add = () => {
  number.num1 = number.num1 + 1; // যেহেতু reactive() শুধু অব্জেক্ট নিয়ে কাজ করে তাই এটিকে প্রথমে number.value ধরে এরপর . দিয়ে সেই অব্জেক্ট এর ভ্যালু টাকে ধরার প্রয়োজন নেই। সরাসরি number.num1 অর্থাৎ object ভ্যারিয়েবলের key টাকে ধরলেই ভ্যালু টাকে ধরা যাবে।
  number.num2 = number.num2 - 1;
}

const subtract = () => {
  number.num2 = number.num2 + 1; // যেহেতু reactive() শুধু অব্জেক্ট নিয়ে কাজ করে তাই এটিকে প্রথমে number.value ধরে এরপর . দিয়ে সেই অব্জেক্ট এর ভ্যালু টাকে ধরার প্রয়োজন নেই। সরাসরি number.num2 অর্থাৎ object ভ্যারিয়েবলের key টাকে ধরলেই ভ্যালু টাকে ধরা যাবে।
  number.num1 = number.num1 - 1;
}

</script>

<template>
  <h1>{{ number.num1 }}</h1>
  <h1>{{ number.num2 }}</h1>

  <button @click="add"> Click1 </button>
  <button @click="subtract"> Click2 </button>
</template>

<style scoped></style> -->






<script setup>

import { ref } from 'vue';

const isLoading = ref(false);
const products = ref([]); // এই const products = ref([]); এর ref([]) হল একটি মেমোরি, যেখানে ডাটা টি স্টোর হবে।


getData();

async function getData() {

  //start API fetching

  isLoading.value = true; // loading animation

  const response = await fetch('https://dummyjson.com/products');
  const data = await response.json();

  // products.value = data; // এখানে পুরো অব্জেক্ট টাকে const products = ref([]); এর ফাকা array বা const products = ref([]); এর ref([]) মেমোরি তে ঢুকে যাবে।

  // products.value = data.products; // এভাবে শুধু এর ফ্রেশ array টাকে ধরা হল 
  products.value = data['products'] // এভাবেও লেখা যায় 

  isLoading.value = false; // loading animation

  // Simulate a delay of 500ms for smoother user experience
  // setTimeout(() => {
  //   products.value = data['products'];
  //   isLoading.value = false; // End loading animation
  // }, 500); // loading animation

  // End API fetching
}

</script>

<template>
  <!-- {{ products }} এটি হল const products = ref([]); এর products ভ্যারিয়েবল -->
  <div class="container">
    <div class="row">
      <div class="col-12 text-center">

        <div v-if="isLoading">
          <div class="spinner-border mt-5" role="status">
            <span class="visually-hidden">Loading...</span>
          </div>
        </div>

        <div v-else>
          <table class="table table-striped">
            <thead>
              <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Category</th>
                <th>Price</th>
              </tr>
            </thead>

            <tbody>
              <tr v-for="item in products" :key="item.id">
                <!-- এখানে products হল পুরো array এবং item হল এক একটি অব্জেক্ট।
        অর্থাৎ item দিয়ে এক একটি অব্জেক্ট কে ধরা হচ্ছে আর products দিয়ে JSON এর পুরো array টিকে বুঝাচ্ছে। -->

                <!-- <td>{{ item.id }}</td>
        <td>{{ item.title }}</td>
        <td>{{ item.category }}</td>
        <td>{{ item.price }}</td> -->

                <!-- এভাবেও লেখা যায় -->
                <td>{{ item['id'] }}</td>
                <td>{{ item['title'] }}</td>
                <td>{{ item['category'] }}</td>
                <td>{{ item['price'] }}</td>
              </tr>
            </tbody>
          </table>
        </div>

      </div>
    </div>
  </div>

</template>
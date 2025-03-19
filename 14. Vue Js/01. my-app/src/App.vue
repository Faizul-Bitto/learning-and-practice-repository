<script setup>
const num1 = 10;
const num2 = 20;
const sum = num1 + num2;

const myFunction = (msg) => {
    return msg;
}

const person = function (name) {
    return name;
}
</script>

<template>
    <h1 style="color:green">Hello Vue Js</h1>
	<button>Submit</button>
    <h1 class="my-text">{{ 2 + 2 }}</h1>
    <h1>{{ 2 - 1 }}</h1>
    <h1>{{ new Date() }}</h1>
    <h1>{{ sum }}</h1>
    <h1>{{ myFunction("hello world") }}</h1>
    <h1>{{ person("John")}}</h1>
</template>

<style scoped>
.my-text {
    color: red;
}
</style>

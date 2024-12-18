<script setup>
import Hero from '../components/home/Hero.vue';
import Courses from '../components/home/Courses.vue';
import Recommended from '../components/home/Recommended.vue';
import Contact from '../components/home/Contact.vue';
import Footer from '../components/home/Footer.vue';
import Testimonial from "../components/home/Testimonial.vue";
import Navbar from '../components/home/Navbar.vue';
</script>

<template>
    <h2>Parent</h2>

    <Navbar />
    <Hero />
    <Courses />
    <Recommended />
    <Testimonial />
    <Contact />
    <Footer />
</template>

<style scoped></style>

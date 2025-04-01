<script setup>

const items = [ 1, 2, 3, 4, 5 ];

const tasks1 = [
  "Complete project proposal",
  "Update website content",
  "Fix bug in user authentication",
  "Prepare presentation slides",
  "Test new feature implementation",
];

const tasks2 = [
  { id: 1, title: "Complete project proposal", status: "In Progress" },
  { id: 2, title: "Update website content", status: "Completed" },
  { id: 3, title: "Fix bug in user authentication", status: "In Progress" },
  { id: 4, title: "Prepare presentation slides", status: "Pending" },
  { id: 5, title: "Test new feature implementation", status: "In Progress" },
];

function getPendingTasks () {
  return tasks2.filter( task => task.status === "Pending" );
}

function getInProgressTasks () {
  return tasks2.filter( task => task.status === "In Progress" );
}

function getCompletedTasks () {
  return tasks2.filter( task => task.status === "Completed" );
}

const persons = [
  {
    id: 1,
    name: "Jane Doe",
    profilePhoto: "https://lighthouse.mq.edu.au/__data/assets/image/0004/917194/women-ceo-tile700x400.jpg",
    jobTitle: "CEO, Co-Founder",
  },
  {
    id: 2,
    name: "John Doe",
    profilePhoto: "https://img.freepik.com/free-photo/closeup-smiling-business-leader-sitting-table_1262-4841.jpg?t=st=1743508614~exp=1743512214~hmac=ece3183d9df74fd4e1c6436ac991b4162fd0855040d8815f9be76a5fb8c313aa&w=740",
    jobTitle: "CTO",
  },
  {
    id: 3,
    name: "Jessy Doe",
    profilePhoto: "https://imageio.forbes.com/specials-images/imageserve/653651737/960x0.jpg?format=jpg&width=1440",
    jobTitle: "COO",
  }
];

const weatherIcons = [
  { title: "Sunny", icon: "https://creazilla-store.fra1.digitaloceanspaces.com/icons/7911203/weather-icon-md.png" },
  { title: "Partly Cloudy", icon: "https://creazilla-store.fra1.digitaloceanspaces.com/icons/7912718/weather-icon-md.png" },
  { title: "Rainy", icon: "https://creazilla-store.fra1.digitaloceanspaces.com/icons/7913380/weather-icon-md.png" },
  { title: "Thunderstorm", icon: "https://creazilla-store.fra1.digitaloceanspaces.com/icons/7912589/weather-icon-md.png" },
];
</script>

<template>

  <!--! running loop -->
  <section class="mx-auto container flex items-center text-center flex-col space-y-2 border border-red-600 p-5">

    <div class="p-5 border border-gray-600 w-40 border border-blue-600" v-for="item in items">{{ items }}</div>
    <div class="p-5 border border-gray-600 w-40 border border-green-600" v-for="item in items">{{ item }}</div>

    <!-- without declaring any array, just print 1 to 5 -->
    <div class="p-5 border border-gray-600 w-40 border border-yellow-600" v-for="n in 5"> {{ n }}</div>

  </section>




  <!--! display index in a loop -->
  <section class="mx-auto container flex items-center text-center flex-col space-y-2 border border-red-600 p-5 mt-20">

    <!-- we can declare index without wrapping up in a bracket, like this => task, index -->
    <div class="p-5 border border-gray-600 w-40 border border-blue-600" v-for="task1, index in tasks1">{{ index + 1 }}.
      {{ tasks1 }}</div>

    <!-- but, it's always a good practice (best coding convention) to declare index with wrapping up in a bracket, like this => (task, index) -->
    <div class="p-5 border border-gray-600 w-40 border border-green-600" v-for="(task1, index) in tasks1">{{ index + 1
      }}.
      {{ task1 }}</div>

  </section>




  <!--! display items in a loop from an 'object' -->
  <section class="mx-auto container flex items-center text-center flex-col space-y-2 border border-red-600 p-5 mt-20">

    <!--? though it is of course possible to run a loop and show the contents without declaring any 'key'. But, it's always a
    best practice to declare an 'key'. -->
    <!--? as we have id here, so we can declare they 'key' like this => :key="task2.id" -->
    <div class="p-5 border border-gray-600 w-40 border border-blue-600" v-for="task2 in tasks2" :key="task2.id">
      {{ task2.id }}. {{ task2.title }}, progress : {{ task2.status }}</div>

    <!--? but, if we don't get any id declared, we can declare the 'index' and then we can use that as the 'key', like this => (task, index) -->
    <div class="p-5 border border-gray-600 w-40 border border-green-600" v-for="(task2, index) in tasks2" :key="index">
      {{ index + 1 }}. {{ task2.title }}, progress : {{ task2.status }}</div>

  </section>




  <!--! display filtered items in a loop also show the items from a 'function' (using a function to get the filtered items) -->
  <section class="mx-auto container flex items-center text-center flex-col space-y-2 border border-red-600 p-5 mt-20">

    <section class="mx-auto container space-y-3">

      <h2><u>Pending</u></h2>
      <div class="p-5 border border-gray-600 text-left" v-for="(task2, index) in getPendingTasks()" :key="index">
        {{ task2.id }} - {{ task2.title }} </div>
      <hr>
      <h2><u>In Progress</u></h2>
      <div class="p-5 border border-gray-600 text-left" v-for="(task2, index) in getInProgressTasks()" :key="index">
        {{ task2.id }} - {{ task2.title }} </div>
      <hr>
      <h2><u>Completed</u></h2>
      <div class="p-5 border border-gray-600 text-left" v-for="(task2, index) in getCompletedTasks()" :key="index">
        {{ task2.id }} - {{ task2.title }} </div>

    </section>

  </section>




  <!--! display images and other items with loop -->
  <section class="mx-auto container flex items-center text-center flex-col space-y-2 border border-red-600 p-5 mt-20">

    <section class="mx-auto container space-y-3">

      <div class="py-20 bg-gray-50">
        <div class="container mx-auto px-6 px-32">
          <div class="mb-16 text-center">
            <h2 class="mb-4 text-center text-2xl text-gray-900 font-bold text-4xl">
              Team Members
            </h2>
            <p class="text-gray-600 w-8/12 mx-auto">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni
              deleniti veniam laudantium itaque perferendis dolor maxime incidunt
              voluptatem.
            </p>
          </div>

          <div class="grid gap-12 items-center grid-cols-3">
            <div class="space-y-4 text-center" v-for="person in persons" :key="person.id">
              <img class="w-64 h-64 mx-auto object-cover rounded-xl w-64 h-64" :src="person.profilePhoto"
                :alt="person.jobTitle" />
              <div>
                <h4 class="text-2xl">{{ person.name }}</h4>
                <span class="block text-sm text-gray-500">{{ person.jobTitle }}</span>
              </div>
            </div>
          </div>

        </div>
      </div>

    </section>

  </section>




  <!--! grouping items with template tag with loop -->
  <section class="mx-auto container m-20 p-10 border border-red-600">

    <h2 class="mb-4 text-center text-2xl text-gray-900 font-bold text-4xl p-5">
      Weather Icons
    </h2>

    <section class="mx-auto container space-y-3 p-5 border border-gray-500 w-80 flex flex-col items-center">

      <template v-for="weatherIcon in weatherIcons" :key="weatherIcon.icon">
        <h2 class="text-2xl">{{ weatherIcon.title }}</h2>
        <img class="w-32" :src="weatherIcon.icon" :alt="weatherIcon.title">
      </template>

    </section>

  </section>
</template>
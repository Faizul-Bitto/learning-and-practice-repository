<script setup>
import { reactive, ref } from 'vue';

const tasks = reactive([]);
const newTask = ref('');
const showForm = ref(false);

const toggleForm = () => {
    showForm.value = !showForm.value;
};

const addTask = () => {
    if (newTask.value.trim().length >= 3) {
        tasks.push({ name: newTask.value.trim(), completed: false });
        newTask.value = '';
        saveTasks();
    } else {
        alert('Task name must be at least 3 characters');
    }
};

const toggleComplete = (index) => {
    tasks[index].completed = !tasks[index].completed;
    saveTasks();
};

const deleteTask = (index) => {
    tasks.splice(index, 1);
    saveTasks();
};

const saveTasks = () => {
    localStorage.setItem('tasks', JSON.stringify(tasks));
};

const loadTasks = () => {
    const saved = localStorage.getItem('tasks');
    if (saved) {
        tasks.push(...JSON.parse(saved));
    }
};

loadTasks();
</script>

<template>
    <div class="task-list">
        <h1>Task Manager App</h1>
        <button @click="toggleForm">{{ showForm ? 'Hide Form' : 'Add New Task' }}</button>
        <div v-if="showForm" class="task-form">
            <input v-model="newTask" placeholder="Enter task name" />
            <button @click="addTask">Add Task</button>
        </div>
        <p v-if="!tasks.length">No tasks available</p>
        <table v-else>
            <thead>
                <tr>
                    <th>Index</th>
                    <th>Tasks</th>
                    <th>Mark as Complete</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="(task, index) in tasks" :key="index">
                    <td>{{ index + 1 }}</td>
                    <td :style="{ backgroundColor: task.completed ? 'lightgreen' : '#8e62c0' }"><b>{{ task.name }}</b>
                    </td>
                    <td>
                        <button @click="toggleComplete(index)">
                            Mark {{ task.completed ? 'Incomplete' : 'Complete' }}
                        </button>
                    </td>
                    <td>
                        <button @click="deleteTask(index)">Delete</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</template>

<style scoped>
.task-list {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    height: 100vh;
    width: 100%;
    box-sizing: border-box;
    background: #8e62c0;
    padding: 20px;
    text-align: center;
}

h1 {
    margin-bottom: 20px;
    font-size: 2.5rem;
    font-weight: bold;
    color: #fdfdfdc1;
}

p {
    color: #fdfdfd;
}

button {
    margin: 5px;
    padding: 8px 12px;
    border: none;
    border-radius: 5px;
    background-color: #c64fc6;
    color: #fdfdfdc1;
    cursor: pointer;
}

button:hover {
    background-color: #6e0e71;
}

input {
    margin: 10px 0;
    padding: 8px;
    border: 1px solid #fdfdfdc1;
    border-radius: 5px;
}

table {
    width: 50%;
    border-collapse: collapse;
    margin-top: 20px;
}

th {
    border: 1px solid #fdfdfdc1;
    padding: 10px;
    text-align: center;
    color: rgb(240, 232, 232);
}

td {
    border: 1px solid #fdfdfdc1;
    padding: 10px;
    text-align: center;
    color: rgb(0, 0, 0);
}
</style>

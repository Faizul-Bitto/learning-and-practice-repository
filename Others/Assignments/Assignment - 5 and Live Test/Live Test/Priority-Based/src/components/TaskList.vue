<script setup>
import { ref } from 'vue';

const newTaskName = ref('');
const newTaskPriority = ref('');
const tasks = ref(JSON.parse(localStorage.getItem('tasks')) || []);
const priorities = ['High', 'Medium', 'Low'];

function addTask() {
    if (newTaskName.value && newTaskPriority.value) {
        tasks.value.push({
            name: newTaskName.value,
            priority: newTaskPriority.value,
        });
        saveTasks();
        newTaskName.value = '';
        newTaskPriority.value = '';
    }
}

function sortedTasks(priority) {
    return tasks.value
        .filter(task => task.priority === priority)
        .sort((a, b) => a.name.localeCompare(b.name));
}

function saveTasks() {
    localStorage.setItem('tasks', JSON.stringify(tasks.value));
}

function priorityClass(priority) {
    return {
        'high-priority': priority === 'High',
        'medium-priority': priority === 'Medium',
        'low-priority': priority === 'Low',
    };
}
</script>

<template>
    <div class="container">
        <div class="task-list">
            <h1>Priority Task List</h1>
            <form @submit.prevent="addTask" class="task-form">
                <input v-model="newTaskName" placeholder="Task Name" required class="task-input" />
                <select v-model="newTaskPriority" class="priority-select">
                    <option disabled value="">Select Priority</option>
                    <option value="High">High</option>
                    <option value="Medium">Medium</option>
                    <option value="Low">Low</option>
                </select>
                <button type="submit" class="add-task-button">Add Task</button>
            </form>

            <div v-for="priority in priorities" :key="priority" class="priority-group">
                <h2 :class="priorityClass(priority)">{{ priority }} Priority</h2>
                <ul>
                    <li v-for="task in sortedTasks(priority)" :key="task.name">{{ task.name }}</li>
                    <li v-if="!sortedTasks(priority).length">No tasks available in this category</li>
                </ul>
            </div>
        </div>
    </div>
</template>

<style scoped>
.container {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    text-align: center;
    background-color: #f0f0f0;
}

.task-list {
    background-color: #fff;
    padding: 40px;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    width: 400px;
}

.task-form {
    display: flex;
    flex-direction: column;
    align-items: center;
    margin-bottom: 20px;
}

.task-input,
.priority-select,
.add-task-button {
    width: 100%;
    max-width: 300px;
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
}

.add-task-button {
    background-color: #007bff;
    color: #fff;
    border: none;
    cursor: pointer;
}

.add-task-button:hover {
    background-color: #0056b3;
}

.priority-group {
    margin-top: 20px;
}

.high-priority {
    color: #ff0000;
}

.medium-priority {
    color: #ffa500;
}

.low-priority {
    color: #008000;
}
</style>

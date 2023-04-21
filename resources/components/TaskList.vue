<template>
    <div class="task-list container">
        <h2>Task List</h2>
        <table class="table table-bordered">
            <thead class="thead-light">
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Status</th>
                    <th>Assigned To</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="task in tasks" :key="task.id">
                    <td>{{ task.id }}</td>
                    <td>{{ task.title }}</td>
                    <td>{{ task.status }}</td>
                    <td>{{ task.assigned_to }}</td>
                    <td>
                        <button class="btn btn-warning">Edit</button>
                        <button class="btn btn-danger">Delete</button>
                    </td>
                </tr>
            </tbody>
        </table>
        <router-link to="/task-form" class="btn btn-primary"
            >Add Task</router-link
        >
    </div>
</template>
<script>
export default {
    data() {
        return {
            tasks: [], // Replace this with the actual data from your API or store
        };
    },
    mounted() {
        // Fetch tasks data here, e.g., using Axios to call your API
    },
};
</script>
<style scoped>
.container {
    display: flex;
    flex-direction: column;
    align-items: center;
    width: 100%;
    max-width: 800px;
    margin: 0 auto;
    padding: 2rem;
}
</style>

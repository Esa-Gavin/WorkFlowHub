<template>
    <div class="task-form container">
        <h2>Create/Edit Task</h2>
        <form @submit.prevent="submitTask">
            <div class="form-group">
                <label for="title">Title:</label>
                <input
                    type="text"
                    id="title"
                    v-model="task.title"
                    class="form-control"
                    required
                />
            </div>
            <div class="form-group">
                <label for="status">Status:</label>
                <select id="status" v-model="task.status" class="form-control">
                    <!-- Populate the options with status data -->
                    <option value="">Select a status</option>
                    <option
                        v-for="status in statuses"
                        :key="status.id"
                        :value="status.id"
                    >
                        {{ status.name }}
                    </option>
                </select>
            </div>
            <div class="form-group">
                <label for="assigned_to">Assigned To:</label>
                <select
                    id="assigned_to"
                    v-model="task.assigned_to"
                    class="form-control"
                >
                    <!-- Populate the options with user data -->
                    <option value="">Select a user</option>
                    <option
                        v-for="user in users"
                        :key="user.id"
                        :value="user.id"
                    >
                        {{ user.name }}
                    </option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Save Task</button>
        </form>
    </div>
</template>
<script>
export default {
    props: {
        task: {
            type: Object,
            default: () => ({
                id: null,
                title: "",
                status: "",
                assigned_to: "",
            }),
        },
    },
    data() {
        return {
            statuses: [], // Replace this with the actual data from your API or store
            users: [], // Replace this with the actual data from your API or store
        };
    },
    methods: {
        submitTask() {
            // Handle form submission, e.g., using Axios to call your API
            // and emit an event to inform the parent component
            console.log("Submitting task:", this.task);
        },
    },
    mounted() {
        // Fetch status and user data here, e.g., using Axios to call your API
    },
};
</script>
<style scoped>
.container {
    display: flex;
    flex-direction: column;
    align-items: center;
    width: 100%;
    max-width: 400px;
    margin: 0 auto;
    padding: 2rem;
}
</style>

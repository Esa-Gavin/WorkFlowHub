<template>
    <div class="container">
        <h1>Status List</h1>
        <ul class="status-list list-group">
            <li
                v-for="(status, index) in statuses"
                :key="index"
                class="list-group-item"
            >
                {{ status.name }}
            </li>
        </ul>
        <router-link to="/status-form" class="btn btn-primary mt-3"
            >Add Status</router-link
        >
    </div>
</template>

<script>
export default {
    data() {
        return {
            statuses: [
                { name: "To Do" },
                { name: "In Progress" },
                { name: "Completed" },
            ],
        };
    },
};
</script>

<style scoped>
.container {
    width: 100%;
    max-width: 400px;
    margin: 0 auto;
    padding: 2rem;
    text-align: center;
}

.status-list {
    list-style-type: none;
    padding: 0;
}
</style>

<template>
    <div class="container">
        <h1>User List</h1>
        <table class="user-table table table-bordered table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="user in users" :key="user.id">
                    <td>{{ user.id }}</td>
                    <td>{{ user.name }}</td>
                    <td>{{ user.email }}</td>
                </tr>
            </tbody>
        </table>
        <router-link to="/user-form" class="btn btn-primary"
            >Add User</router-link
        >
    </div>
</template>
<script>
export default {
    data() {
        return {
            users: [
                // You can either fetch the users from your API or use dummy data for now
                { id: 1, name: "John Doe", email: "john.doe@example.com" },
                { id: 2, name: "Jane Doe", email: "jane.doe@example.com" },
            ],
        };
    },
};
</script>
<style scoped>
.container {
    width: 100%;
    max-width: 600px;
    margin: 0 auto;
    padding: 2rem;
    text-align: center;
}

.user-table {
    width: 100%;
    margin-top: 1rem;
}
</style>

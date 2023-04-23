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
                <tr v-for="user in userList" :key="user.id">
                    <td>{{ user.id }}</td>
                    <td>{{ user.name }}</td>
                    <td>{{ user.email_address }}</td>
                </tr>
            </tbody>
        </table>
        <router-link to="/user-form" class="btn btn-primary"
            >Add User</router-link
        >
    </div>
</template>
<script>
import { mapState } from "vuex";

export default {
    computed: {
        ...mapState(["userList"]),
    },
    created() {
        this.$store.dispatch("fetchUsers");
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

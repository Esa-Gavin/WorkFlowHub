<template>
    <div class="container">
        <h1>Create User</h1>
        <form @submit.prevent="submitForm">
            <div class="form-group">
                <label for="name">Name</label>
                <input
                    type="text"
                    id="name"
                    v-model="user.name"
                    class="form-control"
                    required
                />
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input
                    type="email"
                    id="email"
                    v-model="user.email"
                    class="form-control"
                    required
                />
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</template>
<script>
import userService from "../js/services/userService";

export default {
    data() {
        return {
            user: {
                name: "",
                email: "",
            },
        };
    },
    methods: {
        async submitForm() {
            // Handle form submission, e.g., call API to create a user
            try {
                const newUser = await userService.createUser(this.user);
                this.$emit("user-created", newUser);
                console.log("Form submitted:", this.user);
                this.user = { name: "", email: "" };
            } catch (error) {
                console.error("Error creating user:", error);
            }
        },
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
</style>

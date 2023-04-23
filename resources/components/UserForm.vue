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
                    v-model="user.email_address"
                    class="form-control"
                    required
                />
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</template>
<script>
import { mapActions } from 'vuex';

export default {
    data() {
        return {
            user: {
                name: "",
                email_address: "",
            },
        };
    },
    methods: {
        ...mapActions(["createUser"]),
        async submitForm() {
            try {
                await this.createUser(this.user);
                console.log("Form submitted:", this.user);
                this.user = { name: "", email_address: "" };
                this.$router.push('/');
                
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

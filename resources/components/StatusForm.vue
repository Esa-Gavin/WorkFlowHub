<template>
    <div class="container">
        <h1>Add Status</h1>
        <form @submit.prevent="submitForm">
            <div class="form-group">
                <label for="status-name">Status Name:</label>
                <input
                    type="text"
                    id="status-name"
                    v-model="statusName"
                    required
                    class="form-control"
                />
            </div>
            <button type="submit" class="btn btn-primary">Add Status</button>
        </form>
    </div>
</template>

<script>
export default {
    data() {
        return {
            statusName: "",
        };
    },
    methods: {
        submitForm() {
            console.log("Status submitted:", this.statusName);
            // Add your API call here to create a new status.
            this.statusName = "";
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

.form-group {
    margin-bottom: 1rem;
}
</style>

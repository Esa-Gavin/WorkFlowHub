<template>
  <div class="container">
    <h1>Add Status</h1>
    <form @submit.prevent="submitForm">
      <div class="form-group">
        <label for="status-name">Status Name:</label>
        <input type="text" id="status-name" v-model="statusName" required />
      </div>
      <button type="submit">Add Status</button>
    </form>
  </div>
</template>

<script>
export default {
  data() {
    return {
      statusName: '',
    };
  },
  methods: {
    submitForm() {
      console.log('Status submitted:', this.statusName);
      // Add your API call here to create a new status.
      this.statusName = '';
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

label {
  display: block;
  margin-bottom: 0.5rem;
}

input {
  width: 100%;
  padding: 0.5rem;
  font-size: 1rem;
  border: 1px solid #ccc;
  border-radius: 4px;
}

button {
  background-color: #007bff;
  color: white;
  padding: 0.5rem 1rem;
  font-size: 1rem;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

button:hover {
  background-color: #0056b3;
}
</style>

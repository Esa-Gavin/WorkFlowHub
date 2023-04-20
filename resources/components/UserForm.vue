<template>
  <div class="container">
    <h1>Create User</h1>
    <form @submit.prevent="submitForm">
      <div class="form-group">
        <label for="name">Name</label>
        <input type="text" id="name" v-model="user.name" required />
      </div>
      <div class="form-group">
        <label for="email">Email</label>
        <input type="email" id="email" v-model="user.email" required />
      </div>
      <button type="submit">Submit</button>
    </form>
  </div>
</template>

<script>
export default {
  data() {
    return {
      user: {
        name: '',
        email: '',
      },
    };
  },
  methods: {
    submitForm() {
      // Handle form submission, e.g., call API to create a user
      console.log('Form submitted:', this.user);
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
  display: flex;
  flex-direction: column;
  margin-bottom: 1rem;
}

label {
  margin-bottom: 0.5rem;
}

input {
  padding: 0.5rem;
  font-size: 1rem;
  border: 1px solid #ccc;
}

button {
  padding: 0.5rem 1rem;
  font-size: 1rem;
  background-color: #007bff;
  color: white;
  border: none;
  cursor: pointer;
  margin-top: 1rem;
}

button:hover {
  background-color: #0056b3;
}
</style>

<template>
  <div class="task-list">
    <h2>Task List</h2>
    <table class="table">
      <thead>
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
            <button>Edit</button>
            <button>Delete</button>
          </td>
        </tr>
      </tbody>
    </table>
    <router-link to="/task-form" class="button">Add Task</router-link>
  </div>
</template>

<script>
export default {
  data() {
    return {
      tasks: [] // Replace this with the actual data from your API or store
    };
  },
  mounted() {
    // Fetch tasks data here, e.g., using Axios to call your API
  }
};
</script>

<style scoped>
.task-list {
  display: flex;
  flex-direction: column;
  align-items: center;
}

.table {
  border-collapse: collapse;
  width: 80%;
  margin: 20px 0;
}

.table th,
.table td {
  border: 1px solid #ddd;
  padding: 8px;
  text-align: left;
}

.table th {
  padding-top: 12px;
  padding-bottom: 12px;
  background-color: #f2f2f2;
}
</style>

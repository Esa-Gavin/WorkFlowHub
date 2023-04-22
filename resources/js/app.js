import Vue from "vue";
import VueRouter from "vue-router";
import ExampleComponent from '../components/ExampleComponent.vue';
import UserList from '../components/UserList.vue';
import UserForm from "../components/UserForm.vue";
import StatusList from "../components/StatusList.vue";
import StatusForm from "../components/StatusForm.vue";
import TaskList from "../components/TaskList.vue";
import TaskForm from "../components/TaskForm.vue";

Vue.component('example-component', ExampleComponent);
Vue.component('user-list', UserList);

Vue.use(VueRouter); 

// 👇 route configuration //
const routes = [
    { path: "/", component: UserList },
    { path: "/user-form", component: UserForm },
    { path: "/status-list", component: StatusList },
    { path: "/status-form", component: StatusForm },
    { path: "/task-list", component: TaskList },
    { path: "/task-form", component: TaskForm },
];

const router = new VueRouter({
    mode: "history",
    routes,
});

const app = new Vue({
    el: '#app',
    router, // 👈 add the router instance to the vue instance //
});

export default router;
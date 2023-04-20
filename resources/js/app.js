import Vue from "vue";
import router from "./router";

Vue.component('example-component', ExampleComponent);
Vue.component('user-list', UserList);


const app = new Vue({
    el: '#app',
    router, // 👈 add the router instance to the vue instance //
});


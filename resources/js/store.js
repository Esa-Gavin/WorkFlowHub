import Vue from 'vue';
import Vuex from 'vuex';

Vue.use(Vuex);

export default new Vuex.Store({
    state: {
        users: [],
    },
    mutations: { // 👈 mutations are meant to update the users list
        setUsers(state, users) { // 👈 setUsers mutation is used to update the entire users list
            state.users = users;
        },
        addUser(state, user) { // 👈 addUser mutation adds a single user to the list.
            state.users.push(user)
        },
    },
    actions: {},
    modules: {},
});
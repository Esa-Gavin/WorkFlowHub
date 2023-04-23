import Vue from 'vue';
import Vuex from 'vuex';
import userService from './services/userService';

Vue.use(Vuex);

export default new Vuex.Store({
    state: {
        userList: [],
    },
    mutations: { // 👈 mutations are meant to update the users list
        SET_USER_LIST(state, userList) { // 👈 setUsers mutation is used to update the entire users list
            state.userList = userList;
        },
        addUser(state, user) { // 👈 addUser mutation adds a single user to the list.
            state.userList.push(user)
        },
    },
    actions: {
        async fetchUsers({ commit }) {
            try {
                const users = await userService.getUsers();
                commit('SET_USER_LIST', users);
            } catch (error) {
                console.error("Error fetching users:", error);
            }
        },
        async createUser({ commit }, user) {
            try {
                const newUser = await userService.createUser(user);
                commit('addUser', newUser);
            } catch (error) {
                console.error("Error creating user:", error);
                throw error;
            }
        },
    },
    getters: {
        userList: (state) => state.userList,
    },
});
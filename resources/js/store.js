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
            state.userList = [...userList];
        },
        addUser(state, user) { // 👈 addUser mutation adds a single user to the list.
            console.log("State:", state);
            console.log("Before adding user:", state.userList);
            state.userList.push(user);
            console.log("After adding user:",state.userList);
        },
        RESET_USER_LIST(state) {
            state.userList = [];
        },
    },
    actions: {
        async fetchUsers({ commit }) {
            try {
                const users = await userService.getUsers();
                console.log('Fetched users:', users);
                commit('SET_USER_LIST', Array.isArray(users.users) ? users.users : []);
            } catch (error) {
                console.error("Error fetching users:", error);
            }
        },
        async createUser({ dispatch }, user) {
            try {
                await userService.createUser(user);
                await dispatch('fetchUsers');
            } catch (error) {
                console.error("Error creating user:", error);
                throw error;
            }
        },
        resetUserList({ commit }) {
            commit('RESET_USER_LIST');
        },
    },
    getters: {
        userList: (state) => state.userList,
    },
});
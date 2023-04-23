import axios from 'axios';
import config from '../config';

const API_BASE_URL = config.API_BASE_URL;

const userService = {
    async getUsers() {
        try {
            const response = await axios.get(`${API_BASE_URL}/users`);
            return response.data.user;
        } catch (error) {
            console.error('Error fetching users:', error);
            throw error;
        }
    },

    async createUser(user) {
        try {
            const response = await axios.post(`${API_BASE_URL}/users`, user);
            return response.data;
        } catch (error) {
            console.log(error.response.data);
            throw error;
        }
    }
};

export default userService;
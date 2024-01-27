import axios from 'axios';

const createMyAxiosInstance = (language = 'nl') => {
  return axios.create({
    withCredentials: false,
    baseURL: `${import.meta.env.VITE_BACKEND_BASE_URL}/api/${language}/`,
    headers: {
      Accept: 'application/json',
    },
  });
};

export { createMyAxiosInstance };

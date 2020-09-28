import Axios from "axios";

let urls = {
    test: `http://localhost:3334`,
    development: 'http://127.0.0.1:8000/api/',
    production: 'https://your-production-url.com/'
}
const api = Axios.create({
    baseURL: urls[process.env.NODE_ENV],
    headers: {
        'Accept': 'application/json',
        'Content-Type': 'application/json'
    }
});

export default api;
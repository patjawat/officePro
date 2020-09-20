/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
import VueRouter from "vue-router";
import store from "./store/index";
import DataTable from 'laravel-vue-datatable';
import NavbarComponent from './components/NavbarComponent.vue';
import MemberComponent from './components/MemberComponent.vue';
import LoginForm from './components/LoginForm.vue';

Vue.use(VueRouter)
Vue.use(DataTable)
/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

// Vue.component(
//     "example-component",
//     require("./components/ExampleComponent.vue").default
// );
Vue.component("navbar-component", NavbarComponent).default;
Vue.component("login-form", LoginForm).default;
// Vue.component("data-table", DataTable).default;


const routes = [
    { path: "/", component: require("./components/Site.vue").default },
    {path: "/basic",component: require("./components/ExampleComponent.vue").default},
    { path: "/login", component: LoginForm.default },
    { path: "/create", component: require("./components/Create.vue").default },
    { path: "/product", component: require("./components/Product.vue").default },
    { path: "/edit/:id", component: require("./components/Edit.vue").default }
];

const router = new VueRouter({
    routes
});

const app = new Vue({
    router,
    store,
    el: '#app',
});

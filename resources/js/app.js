/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
const axios = require('axios');
import VueRouter from "vue-router";
Vue.use(VueRouter);

axios.defaults.baseURL = 'http://homestead.todolist/api';
axios.defaults.headers['Content-Type'] = 'application/json';
axios.defaults.headers['Accept'] = 'application/json';

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

// Vue.component('example-component', require('./components/ExampleComponent.vue').default);
// Vue.component('todo-item',require('./components/testvue.vue').default);
import HomeComponent from "./components/HomeComponent.vue";
import CreateComponent from "./components/CreateComponent.vue";
import ListsComponent from "./components/ListsComponent.vue";
import EditComponent from "./components/EditComponent.vue";
import App from "./App.vue";

const routes = [{
    name: "home",
    path: "/home",
    component: HomeComponent
}, {
    name: "create",
    path: "/create",
    component: CreateComponent
}, {
    name: "lists",
    path: "/lists",
    component: ListsComponent
}, {
    name: "listedit",
    path: "/lists/edit/:id",
    component: EditComponent
}];

const router = new VueRouter({
    mode: "history",
    routes: routes
});
const app = new Vue(Vue.util.extend({
    router
}, App)).$mount("#todo");

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

// const app = new Vue({
//     el: '#app'
//
// });
//
// const app2 = new Vue({
//     el: '#app2',
//
//
// });

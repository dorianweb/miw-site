import Vue from 'vue';
import VueRouter from "vue-router";
import Vuex from 'vuex';
import routes from './router';
import App from "./components/App";

require('./bootstrap');
Vue.use(VueRouter);
Vue.use(Vuex);
Vue.component('App',App);
const app = new Vue({
    el: '#app',
    router: new VueRouter(routes),
});

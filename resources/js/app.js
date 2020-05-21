import Vue from 'vue';
import VueRouter from "vue-router";
import Vuex from 'vuex';
import routes from './router';
import App from "./components/App";
import store from "./store/store";
import VuexPersistence from 'vuex-persist';

require('./bootstrap');
Vue.use(VueRouter);
Vue.use(Vuex);

 const vuexLocal=  new VuexPersistence({
     storage: window.localStorage
 });

Vue.component('App',App);
const app = new Vue({
    el: '#app',
    router: new VueRouter(routes),
    store:new Vuex.Store({
        ...store,
        plugins: [vuexLocal.plugin],
        }
    ),
});

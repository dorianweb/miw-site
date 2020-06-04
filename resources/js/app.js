import Vue from 'vue';
import VueRouter from "vue-router";
import routes from './router';
import App from "./components/App";
import store from "./store/store";
import CKEditor from '@ckeditor/ckeditor5-vue';

require('./bootstrap');
Vue.use(VueRouter);
Vue.use(CKEditor);


Vue.component('App', App);
const app = new Vue({
    el: '#app',
    router: new VueRouter(routes),
    store,
});

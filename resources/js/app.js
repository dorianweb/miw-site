import Vue from 'vue';
import VueRouter from "vue-router";
import routes from './router';
import App from "./components/App";
import store from "./store/store";
import EditorComponent from "./components/backend/EditorComponent";
import CKEDITOR from '@ckeditor/ckeditor5-vue';

require('./bootstrap');
Vue.use(VueRouter);
Vue.use(CKEDITOR);


Vue.component('App', App);
Vue.component('editor', EditorComponent);
const app = new Vue({
    el: '#app',
    router: new VueRouter(routes),
    store,
});

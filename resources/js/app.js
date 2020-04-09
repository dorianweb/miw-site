import Vue from 'vue';
import VueRouter from "vue-router";
import routes from './router';
import NavbarComponent from "./components/NavbarComponent";
import ExampleComponent from "./components/ExampleComponent";
import App from "./components/App";
require('./bootstrap');
Vue.use(VueRouter);
const app = new Vue({
    el: '#app',
    router: new VueRouter(routes),
    components: {App,NavbarComponent,ExampleComponent}
});

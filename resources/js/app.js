import Vue from 'vue';
import VueRouter from "vue-router";

require('./bootstrap');

Vue.use(VueRouter);

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
import routes from './router/index';
const app = new Vue({
    el: '#app',
    router:new VueRouter(routes),
});

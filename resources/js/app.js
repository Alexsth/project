/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */
import App from './components/App'
import router from './router'

require('./bootstrap');

window.Vue = require('vue');



// Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('header-view', require('./components/layouts/Header.vue').default);
Vue.component('footer-view', require('./components/layouts/Footer.vue').default);



const app = new Vue({
    el: '#app',
    router,
    template: '<App/>',
    components: {
        App
    },
});

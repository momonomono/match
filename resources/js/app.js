/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('header-component',require('./components/Header.vue').default);


Vue.component('login-component',require("./pages/login.vue").default);
Vue.component('signup-component',require('./pages/signup.vue').default);
Vue.component('mypage-component',require('./pages/mypage.vue').default);
Vue.component('reminder-component',require('./pages/reminder.vue').default);
Vue.component('check-hashkey-component',require('./pages/checkHashKey.vue').default);
Vue.component('reset-password-component',require('./pages/resetPassword.vue').default);
Vue.component('jobpost-component',require('./pages/jobPost.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});

import Vue from "vue";
import "../sass/app.scss";

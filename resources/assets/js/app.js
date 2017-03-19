
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

var Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

import Datepicker from 'vuejs-datepicker';

Vue.component('example', require('./components/Example.vue'));
Vue.component('date-picker', Datepicker);

var app = new Vue({
    el: '#app',
    data: {
        room_categories: []
    },
    mounted() {
        axios.get('/api/roomcategories').then(response => this.room_categories = response.data);
    }
});

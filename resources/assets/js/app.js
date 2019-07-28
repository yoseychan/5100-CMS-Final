require('bootstrap');
import Vue from 'vue';
import axios from 'axios';

window.axios = axios;

Vue.component('test2', require('./components/Test2').default);
Vue.component('login', require('./components/Login').default);



Vue.config.productionTip = false;


var app = new Vue({
  el: '#app',
});


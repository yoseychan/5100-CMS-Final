require('bootstrap');
import Vue from 'vue';
import axios from 'axios';

window.axios = axios;




Vue.config.productionTip = false;


var app = new Vue({
  el: '#app',
});


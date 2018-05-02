import Vue from 'vue';
import "core-js/fn/object/assign"

import router from './router';
import App from '../components/App.vue';

var app = new Vue({
    el: '#app',
    render: h => h(App),
    router
});
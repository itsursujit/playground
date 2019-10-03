import Vue from 'vue';
import router from './router';
import App from './components/App';

require('./bootstrap');

Vue.config.productionTip = false;
const app = new Vue({
    el: '#app',
    components : {
        App
    },
    router
});

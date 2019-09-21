import "reflect-metadata";
import Vue from "vue";
import Axios from "axios";
import ExampleComponent from "./components/ExampleComponent.vue";

Vue.component("example-component", ExampleComponent);

Vue.prototype.$http = Axios;
Vue.prototype.$http.defaults.headers.common = {
    "X-Requested-With": "XMLHttpRequest",
    "X-CSRF-TOKEN": document.head.querySelector('meta[name="csrf-token"]')
};

new Vue({}).$mount("#app");

import Vue from "vue";
import router from "./router"; // 追加 1.
import App from "./App.vue"; // 追加 2.


new Vue({
    el: "#app",
    router: router,
    components: { App },
    template: "<App />",
});

// 1.
import Vue from "vue";
import VueRouter from "vue-router";

// 2.
import Top from "./pages/Top.vue";
import BuiltWith from "./pages/BuiltWith.vue";
import NotFonud from "./pages/NotFound.vue"
import Java from "./pages/language/Java.vue";
import PHP from "./pages/language/PHP.vue";
import RUby from "./pages/language/RUby.vue";
import Python from "./pages/language/Python.vue";
import JavaScript from "./pages/language/JavaScript.vue";
import Go from "./pages/language/Go.vue";

// 3.
Vue.use(VueRouter);

// 4.
const routes = [
    {
        path: "/",
        component: Top
    },
    {
        path: "/builtwith",
        component: BuiltWith
    },
    {
        path: "/java",
        component: Java
    },
    {
        path: "/php",
        component: PHP
    },
    {
        path: "/ruby",
        component: RUby
    },
    {
        path: "/python",
        component: Python
    },
    {
        path: "/javascript",
        component: JavaScript
    },
    {
        path: "/go",
        component: Go
    },
    {
        path: "*",
        component: NotFonud
    }
];

// 5.
const router = new VueRouter({
    mode: "history",
    routes
});

// 6.
export default router;

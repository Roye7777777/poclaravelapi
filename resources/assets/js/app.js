
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

import Vue from 'vue';
import VueRouter from 'vue-router';
import RootComponent from './components/root';

Vue.use(VueRouter);

/*
 * Initialize Vue Router
 */
import LoginView from './views/login'
import HomeView from './views/home'

const router = new VueRouter({
    mode: 'history',
    routes: [
        {
            path: '/login',
            name: 'login',
            component: LoginView,
        },
        {
            path: '/',
            name: 'home',
            component: HomeView
        },
    ],
});

/**
 * Attach root component
 */

const app = new Vue({
    el: '#app',
    components: { RootComponent },
    router,
});

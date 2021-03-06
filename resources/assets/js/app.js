
/**
 * First we will load all of this project's JavaScript dependencies which
 * include Vue and Vue Resource. This gives a great starting point for
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('home', require('./components/Home.vue'));
Vue.component('top-nav', require('./components/navigation/TopNav.vue'));
Vue.component('side-nav', require('./components/navigation/SideNav.vue'));
Vue.component('timeline', require('./components/Timeline.vue'));

const app = new Vue({
    el: '#app'
});

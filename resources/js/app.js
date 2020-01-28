require('./bootstrap');

window.Vue = require('vue');

import VueRouter from 'vue-router'

Vue.use(VueRouter)


const routes = [
    { path: '/home', component:  require('./components/home.vue').default },
    { path: '/about', component:  require('./components/about.vue').default },
    { path: '/skills', component:  require('./components/skills.vue').default },
    { path: '/projects', component:  require('./components/projects.vue').default },
    { path: '/mail', component:  require('./components/mail.vue').default },
]

const router = new VueRouter({
    mode:"history",
    routes 
})

const app = new Vue({
    el: '#app',
    router
});

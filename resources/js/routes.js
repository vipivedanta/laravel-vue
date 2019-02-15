import Vue from 'vue';
import VueRouter from 'vue-router';
import Login from './components/Login';
import Home from './components/Home';

Vue.use(VueRouter);

const router = new VueRouter({
    mode : 'history',
    routes : [
        {
            path : '/login',
            component : Login
        },
        {
            path : '/',
            component : Home
        }
    ]
});

export default router;
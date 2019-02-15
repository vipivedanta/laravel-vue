require('./bootstrap');
window.Vue = require('vue');
import App from './components/App';
import router from './routes';

new Vue({
    render : h => h(App),
    router : router
}).$mount('#app');
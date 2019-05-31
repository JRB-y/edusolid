require('./bootstrap');
window.Vue = require('vue');
import BootstrapVue from 'bootstrap-vue';

import CompleteProfile from './components/Profile/CompleteProfile.vue';

Vue.use(BootstrapVue);

const app = new Vue({
    el: '#app',
    components: { CompleteProfile }
});

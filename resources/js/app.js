require('./bootstrap');
window.Vue = require('vue');
import BootstrapVue from 'bootstrap-vue';

import CompleteProfile from './components/Profile/CompleteProfile.vue';
import NewQuestion from './components/Question/NewQuestion';
import TutorGoOnline from './components/Tutor/TutorGoOnline';

Vue.use(BootstrapVue);

const app = new Vue({
    el: '#app',
    components: { CompleteProfile, NewQuestion, TutorGoOnline }
});

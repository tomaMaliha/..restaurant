
require('./bootstrap');
require('vue-multiselect/dist/vue-multiselect.min.css');

window.Vue = require('vue');



Vue.component('card-component', require('./components/card.vue').default);
Vue.component('manu-container', require('./manu/manuContainer.vue').default);



const app = new Vue({
    el: '#app',
});

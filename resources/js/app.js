
require('./bootstrap');

window.Vue = require('vue');


Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('manu-container', require('./manu/manuContainer.vue').default);



const app = new Vue({
    el: '#app',
});

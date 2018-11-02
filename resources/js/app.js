import Vue from 'vue';
import axios from 'axios';
import Form from './core/Form';

window.axios = axios;
window.Form = Form;
Vue.component('count', require('./Count.vue'));

new Vue({
    el: '#app',

    data: {
        form: new Form({
            name: '',
            description: ''
        }),
    },

    methods: {
        onSubmit() {
            this.form.post('/projects');
        }
    }
});

// 
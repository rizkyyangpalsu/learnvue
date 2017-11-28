import Vue from 'vue'
import VueRouter from 'vue-router'


import DisplayItem from './components/DisplayItem.vue';
import CreateItem from './components/CreateItem.vue';
import EditItem from './components/EditItem.vue';

let routes = [
    {
        name: 'DisplayItem',
        path: '/',
        component: DisplayItem
    },
    {
        name: 'CreateItem',
        path: '/create',
        component: CreateItem
    },
    {
        name: 'EditItem',
        path: '/edit',
        component: EditItem
    },

];

Vue.use(VueRouter);

export default new VueRouter({
    mode: 'history',
    routes
});
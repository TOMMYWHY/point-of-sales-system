import Vue from'vue';
import VueRouter from 'vue-router'
import Product from '../components/Product'
import Task from '../components/Task'

Vue.use(VueRouter);

const routes=[
    { path:'/', redirect:'/product/'},
    {name:'product', path:'/product/', component:Product},
    {name:'task', path:'/task', component:Task},
];

export default new VueRouter({
    saveScrollPosition:true,
    routes:routes
})
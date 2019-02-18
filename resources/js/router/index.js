import Vue from'vue';
import VueRouter from 'vue-router'
import Product from '../components/Product'
import Task from '../components/Task'
import TaskDetail from '../components/TaskDetail'

Vue.use(VueRouter);

const routes=[
    { path:'/', redirect:'/product/'},
    {name:'product', path:'/product/', component:Product},
    {name:'task', path:'/task', component:Task},
    {name:'taskBooking', path:'/task/product/:id', component:TaskDetail},
];

export default new VueRouter({
    saveScrollPosition:true,
    routes:routes
})
import Vue from 'vue'
import Vuex from 'vuex'
import products from './products'
import tasks from './tasks'

Vue.use(Vuex);

export default new Vuex.Store({
    modules:{
        products,
        // tasks
    }
})
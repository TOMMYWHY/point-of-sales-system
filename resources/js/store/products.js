import api from '../api'
// import axios from "axios/index";

export default {
    state:{
        lists :[],
        detail:{}
    },
    getters:{
        GET_PRODUCT_LIST(state){
            let productList = state.lists;
            if(!productList){
                productList = JSON.parse(window.localStorage.getItem('productList') || null)
            }
            return productList;
        }
    },
    mutations:{
        SetLists(state,lists){
            state.lists = lists
        }
        /*
        SetDetail(state,detail){
            state.detail = detail
        }*/
    },
    actions:{
        getLists({commit}){
            axios.get('api/v1/price').then(res=>{
                // console.log(res.data);
                // context.commit('SET_PRODUCT_LIST',res.data);
                window.localStorage.setItem('productList',JSON.stringify(res.data));
                commit('SetLists',res.data);
                // commit('aaa');
            })
        },
       /* getLists({commit}){
            api.getProductsLists().then(res=>{
                commit('SetLists',res.data);
            })
        },*/
      /*  getDetail({commit},id){
            /!*axios.get('api/questions/'+id).then(res=>{
                console.log(res.data);
                commit('SetDetail',res.data);
            })*!/
            api.getQuestionsDetail(id).then(res=>{
                console.log(res.data);
                commit('SetDetail',res.data);
            })
        }*/
    },
}
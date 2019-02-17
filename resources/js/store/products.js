import api from '../api'
// import axios from "axios/index";

export default {
    state:{
        lists :[],
        detail:{}
    },
    getters:{},
    mutations:{
        SetLists(state,lists){
            state.lists = lists
        },
        SetDetail(state,detail){
            state.detail = detail
        }
    },
    actions:{
        getLists({commit}){
            api.getProductsLists().then(res=>{
                commit('SetLists',res.data);
            })
        },
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
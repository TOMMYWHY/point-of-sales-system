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
            axios.get('api/v1/task').then(res=>{
                // console.log(res.data);
                commit('SetLists',res.data);
            })
        },
        /*getLists({commit}){
            api.getTasksLists().then(res=>{
                commit('SetLists',res.data);
            })
        },*/

    },
}
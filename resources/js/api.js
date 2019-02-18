import  axios from 'axios'

export default {
    getProductsLists(params){
        return axios.get('api/v1/price',{
            params:params
        })
    },
    /*getQuestionsDetail(id){
        return axios.get('api/questions/'+id,{
            id:id
            // id : this.$route.params.id
        })
    }*/
    getTasksLists(params){
        return axios.get('api/v1/task',{
            params:params
        })
    },
}
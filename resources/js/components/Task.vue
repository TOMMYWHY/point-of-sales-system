<template>
    <div class="table-responsive">
        <table class="table table-hover table-sm">
            <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">issue</th>
                <th scope="col">description</th>
                <th scope="col">customer name</th>
                <th scope="col">customer number</th>
                <th scope="col">price</th>
                <th scope="col">status</th>
                <th scope="col">actions</th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="item in tasks">
                <th scope="row">{{item.id}}</th>
                <td colspan="1">{{item.issue}}</td>
                <td colspan="1">{{item.desc}}</td>
                <td colspan="1">{{item.customer.name}}</td>
                <td colspan="1">{{item.customer.phone}}</td>
                <td colspan="1">{{item.price}}</td>
                <td colspan="1">{{item.status}}</td>
                <td colspan="1"><button class="btn btn-info">Detail</button></td>
            </tr>
            </tbody>
        </table>

    </div>
</template>

<script>
    export default {
        name: "Task",


        data(){
            return {
                tasks:null
            }
        },
        mounted(){
            console.log('tasks');
            /*
            * task 组件 与 product 组件 共享 productList 数据。
            * 共享方案，localstorage 或是 vuex 共享
            * 问题：localstorage 数据变化时需要更新，（productList 数据 基本不变）
            *       vuex 必须先去product 页面获取数据，然后才能共享到期他组件中
            * */
            console.log(this.$store.state.products.lists);
            // console.log('storage',window.localStorage.productList);


            //异步
            //使用vue-axios 后 可以this.axios
            this.axios.request('api/v1/task').then(res=>{
                // console.log(res.data);
                this.tasks = res.data; //此处data 是一个数组，内部存储的是对象；遍历是时使用 in
            });
        },
        /*
        computed:{
            lists(){
                console.log('task');
                console.log(this.$store.state.tasks.lists);
                return this.$store.state.tasks.lists;
            }
        },
*/
/*
        created(){
            this.getLists();
        },
*/
/*
        methods: {
            getLists(){
                this.$store.dispatch('getLists');
                // this.getLists();//遇上面同义； 解构后可以直接使用 this 调用
            },
            /!*...mapActions([
                'getLists'
            ])*!/
        }
*/

    }

</script>

<style scoped>

</style>
<script>
    import  {mapState, mapActions,mapGetters} from 'vuex'
    import store from '../store/index'
    export default {
        name: "Product",
        store,
        computed:{
           /* ...mapActions([
                'getLists'
            ]),*/

            lists(){
                // console.log(this.$store.state.products.lists);
                return this.$store.state.products.lists;
            }
        },
        created(){
            console.log(111);
            this.getLists();

            console.log(this.$store.state.products);
            // console.log('storage',window.localStorage.productList)
            // console.log(this.$store.state.products);

        },
        methods: {

            getLists(){
                this.$store.dispatch('getLists');
                // this.getLists();//遇上面同义； 解构后可以直接使用 this 调用
            },
            /*...mapActions([
                'getLists'
            ])*/
        }

    }
</script>

<style scoped>

</style>

<template>
    <div class="table-responsive">
        {{this.$store.state.lists}}

        <table class="table table-hover table-sm">
            <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">name</th>
                <th scope="col">trait</th>
                <th scope="col">price</th>
                <th scope="col">discount</th>
                <th scope="col">stock</th>
                <th scope="col">actions</th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="item in lists">
                <th scope="row">{{item.id}}</th>
                <td colspan="1">{{item.name}}</td>
                <td colspan="1">{{item.trait}}</td>
                <td colspan="1">{{item.price}}</td>
                <td colspan="1">{{item.discount}}</td>
                <td colspan="1">{{item.stock}}</td>

                <td colspan="1">
                    <router-link :to="{path:'/task/product/' + item.id}">
                        <button class="btn btn-info">  booking</button>
                    </router-link>
                </td>
            </tr>
            </tbody>
        </table>

    </div>
</template>

<template>
    <div class="table-responsive">
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
                <td colspan="1"><button class="btn btn-info">Booking</button></td>
            </tr>
            </tbody>
        </table>

    </div>
</template>

<script>
    import  {mapState, mapActions} from 'vuex'

    export default {
        name: "Product",
        computed:{
            lists(){
                console.log(this.$store.state.products.lists);
                return this.$store.state.products.lists;
            }
        },
        created(){
            this.getLists();
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
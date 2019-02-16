<template>
    <div class="table-responsive">
        <table class="table table-hover table-sm">
            <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">First</th>
                <th scope="col">Last</th>
                <th scope="col">Handle</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td colspan="2">Larry the Bird</td>
                <td>@twitter</td>
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
    }
</script>

<style scoped>

</style>
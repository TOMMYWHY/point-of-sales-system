<template>
    <div>
        <h1>app root component</h1>
        <div>
            <router-link :to="{name:'product'}" class="btn btn-primary">product</router-link>
            <router-link :to="{name:'task'}" class="btn btn-primary">task</router-link>
        </div>
        <p>app.vue</p>
        <hr>
        <router-view></router-view>

    </div>
</template>

<script>
    import Product from './Product'

    export default {
        name: "App",
        components:{Product},
    }
</script>

<style scoped>

</style>
<template>
    <div class="container">
        <div class="row">
            <div class="col-md-4 order-md-2 mb-4"   >
                <div v-if="product">
                    <h4 class="d-flex justify-content-between align-items-center mb-3">
                        <span class="text-muted" >{{product.name}}</span>
                        <span class="badge badge-secondary badge-pill" > {{this.$route.params.id }}</span>
                    </h4>
                    <ul class="list-group mb-3">
                        <li class="list-group-item d-flex justify-content-between lh-condensed">
                            <div>
                                <h6 class="my-0">Product trait</h6>
                                <!--<small class="text-muted">white</small>-->
                            </div>
                            <span class="text-muted">{{product.trait}}</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between lh-condensed">
                            <div>
                                <h6 class="my-0">product price</h6>
                                <!--<small class="text-muted">Brief description</small>-->
                            </div>
                            <span class="text-muted">${{product.price}}</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between lh-condensed">
                            <div>
                                <h6 class="my-0">product description</h6>
                                <!--<small class="text-muted">Brief description</small>-->
                            </div>
                            <span class="text-muted">{{product.desc}}</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between bg-light">
                            <div class="text-success">
                                <span>Total (USD)</span>

                            </div>
                            <strong class="text-success">${{product.price}}</strong>

                        </li>

                    </ul>
                </div>

                <!---->
                <div v-if="taskData.tasks">
                    <h4 class="d-flex justify-content-between align-items-center mb-3">
                        <span class="text-muted" >customer history</span>
                    </h4>
                    <ul class="list-group mb-3">

                        <li class="list-group-item d-flex justify-content-between lh-condensed" v-for="task in taskData.tasks">
                            <div>
                                <h6 class="my-0">product name: {{task.issue}}</h6>
                                <small class="text-muted">date: {{task.created_at}}</small>
                            </div>
                            <span class="text-muted">${{task.price}}</span>
                        </li>

                    </ul>
                </div>





            </div>
            <div class="col-md-8 order-md-1">
                <h4 class="mb-3">Customer Info</h4>
                <form class="needs-validation" novalidate method="post" @submit.prevent="submitData">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="phone">Contact number111</label>
                            <!--<input type="text" class="form-control" id="phone" placeholder="" value="" required v-model="taskData.phone">-->
                            <!--<input type="text" class="form-control" id="phone" placeholder="" value="111" required v-model="phone" @change="checkPhone">-->
                            <input type="text" v-model="phone" />
                            {{checkPhoneRes }}
                            <div class="invalid-feedback">
                                Valid phone is required.
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="name">Full name</label>
                            <input type="text" class="form-control" id="name" placeholder="" value="" required v-model="taskData.name">
                            <div class="invalid-feedback">
                                Valid full name is required.
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="email">Email <span class="text-muted">(Optional)</span></label>
                        <input type="email" class="form-control" id="email" placeholder="you@example.com" v-model="taskData.email">
                        <div class="invalid-feedback">
                            Please enter a valid email address.
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="address">Address</label>
                        <input type="text" class="form-control" id="address" placeholder="1234 Main St" required v-model="taskData.address">
                        <div class="invalid-feedback">
                            Please enter your deliver address.
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="issue">Issue</label>
                        <input type="text" class="form-control" id="issue" placeholder="" required v-model="taskData.issue">
                        <div class="invalid-feedback">
                            Please enter your issue.
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="desc">description</label>
                        <textarea type="text" class="form-control" id="desc" placeholder="" v-model="taskData.desc" ></textarea>
                        <div class="invalid-feedback">
                            Please enter your issue.
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="pin_code">pin code</label>
                        <input type="text" class="form-control" id="pin_code" placeholder="" required v-model="taskData.pin_code">
                        <div class="invalid-feedback">
                            Please enter your pin_code.
                        </div>
                    </div>
                    <hr class="mb-4">
                    <h4 class="mb-3">status</h4>
                    <div class="d-block my-3">
                        <div class="custom-control custom-radio">
                            <input id="processing" name="status" type="radio" class="custom-control-input" checked="checked" required value="1" v-model="taskData.status">
                            <label class="custom-control-label" for="processing">processing</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input id="waiting_parts" name="status" type="radio" class="custom-control-input" required value="2" v-model="taskData.status">
                            <label class="custom-control-label" for="waiting_parts">waiting parts</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input id="done" name="status" type="radio" class="custom-control-input" required v-model="taskData.status" value="3">
                            <label class="custom-control-label" for="done">done</label>
                        </div>
                    </div>
                    <hr class="mb-4">
                    <button class="btn btn-primary btn-lg btn-block" type="submit">submit</button>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "TaskDetail",
        data(){
            return {
                productId:0,
                product:null,
                total:0,
                phone:null,
                checkPhoneRes:[],
                taskData:{
                    // status:0
                }
            }
        },
        watch:{
             phone(val){
                 this.getPhoneResult();

             },
        },
        mounted(){
            this.getProductId();
            this.getProductInfo();
            // this.getTotalPrice();
            // console.log(this.total);
        },
         methods:{
            getPhoneResult(){
                let url = 'api/v1/customer/query?phone='+ this.phone;
                axios.get(url).then(res=>{
                    if (res.data.status != 0){
                        console.log(res.data);
                        this.taskData =res.data
                    }else{
                        console.log(res.data.msg);
                    }
                }).catch(err=>{
                    console.log(err);
                });
            },
            submitData(){
                console.log('submited');

                let url = 'api/v1/task';
                // let data = JSON.stringify(this.taskData);

                this.taskData.product_id=this.productId;

                // console.log(data);
                axios.post(url,this.taskData,{
                    headers: {
                        // 'Content-Type': 'application/x-www-form-urlencoded'
                    }
                }).then(res=>{
                    // console.log(res.data);
                    if (res.data.status = 0) {
                        //todo
                        //提示 创建成功
                        // alert( res. data.msg);
                    }
                }).catch(err=>{
                    console.log(err);
                });
            },

            getProductId(){
               this.productId = this.$route.params.id ;

            },
            getProductInfo(){
                // console.log(this.$route.params.id);
                // let id = this.$route.params.id;
                let id = this.productId;
                this.product = this.$store.state.products.lists[id - 1];
                // console.log(this.product);
            },
             /*
             * todo
             * getTotalPrice
             * */
             getTotalPrice(){
                 let id = this.productId;
                 // console.log(this.$store.state.products.lists[id]);
                // this.total = this.$store.state.products.lists[this.productId];
             },
         }
    }
</script>

<style scoped>

</style>
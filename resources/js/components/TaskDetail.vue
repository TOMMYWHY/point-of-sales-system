<template>
    <div class="container">
        <div class="row">
            <div class="col-md-4 order-md-2 mb-4">
                <h4 class="d-flex justify-content-between align-items-center mb-3">
                    <span class="text-muted">product name todo</span>
                    <span class="badge badge-secondary badge-pill"> {{this.$route.params.id }}</span>
                </h4>
                <ul class="list-group mb-3">
                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                        <div>
                            <h6 class="my-0">Product trait</h6>
                            <!--<small class="text-muted">white</small>-->
                        </div>
                        <span class="text-muted">white</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                        <div>
                            <h6 class="my-0">product price</h6>
                            <!--<small class="text-muted">Brief description</small>-->
                        </div>
                        <span class="text-muted">$8</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                        <div>
                            <h6 class="my-0">product description</h6>
                            <!--<small class="text-muted">Brief description</small>-->
                        </div>
                        <span class="text-muted">details</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between bg-light">
                        <div class="text-success">
                            <span>Total (USD)</span>

                        </div>
                        <strong class="text-success">$20</strong>

                    </li>

                </ul>

                <form class="card p-2">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Promo code">
                        <div class="input-group-append">
                            <button type="submit" class="btn btn-secondary">Redeem</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-8 order-md-1">
                <h4 class="mb-3">Customer Info</h4>
                <form class="needs-validation" novalidate>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="name">Full name</label>
                            <input type="text" class="form-control" id="name" placeholder="" value="" required>
                            <div class="invalid-feedback">
                                Valid full name is required.
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="phone">Contact number</label>
                            <input type="text" class="form-control" id="phone" placeholder="" value="" required>
                            <div class="invalid-feedback">
                                Valid phone is required.
                            </div>
                        </div>
                    </div>


                    <div class="mb-3">
                        <label for="email">Email <span class="text-muted">(Optional)</span></label>
                        <input type="email" class="form-control" id="email" placeholder="you@example.com">
                        <div class="invalid-feedback">
                            Please enter a valid email address.
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="address">Address</label>
                        <input type="text" class="form-control" id="address" placeholder="1234 Main St" required>
                        <div class="invalid-feedback">
                            Please enter your deliver address.
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="issue">Issue</label>
                        <input type="text" class="form-control" id="issue" placeholder="" required>
                        <div class="invalid-feedback">
                            Please enter your issue.
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="desc">description</label>
                        <textarea type="text" class="form-control" id="desc" placeholder=""  ></textarea>
                        <div class="invalid-feedback">
                            Please enter your issue.
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="pin_code">pin code</label>
                        <input type="text" class="form-control" id="pin_code" placeholder="" required>
                        <div class="invalid-feedback">
                            Please enter your pin_code.
                        </div>
                    </div>




                    <hr class="mb-4">

                    <h4 class="mb-3">status</h4>

                    <div class="d-block my-3">
                        <div class="custom-control custom-radio">
                            <input id="processing" name="status" type="radio" class="custom-control-input" checked required>
                            <label class="custom-control-label" for="processing">processing</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input id="waiting_parts" name="status" type="radio" class="custom-control-input" required>
                            <label class="custom-control-label" for="waiting_parts">waiting parts</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input id="done" name="status" type="radio" class="custom-control-input" required>
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
                product:null
            }
        },

        created(){
            console.log(this.$route.params.id);
            console.log(this.$store.state);
        }
    }
</script>

<style scoped>

</style>
<template>
    <div class="container">

        <h3>Shipping Details</h3>
        <div class="form-group">
          <label for="">Shipping Fullname</label>
          <input type="text" name="" id="" class="form-control" v-model="shipping.shipping_fullname">
        </div>
        <div class="form-group">
          <label for="">Shipping Address</label>
          <input type="text" name="" id="" class="form-control" v-model="shipping.shipping_address">
        </div>
         <div class="form-group">
          <label for="">Shipping City</label>
          <input type="text" name="" id="" class="form-control" v-model="shipping.shipping_city">
        </div>
         <div class="form-group">
          <label for="">Shipping State</label>
          <input type="text" name="" id="" class="form-control" v-model="shipping.shipping_state">
        </div>
         <div class="form-group">
          <label for="">Shipping Zipcode</label>
          <input type="text" name="" id="" class="form-control" v-model="shipping.shipping_zipcode">
        </div>
         <div class="form-group">
          <label for="">Shipping Phone</label>
          <input type="text" name="" id="" class="form-control" v-model="shipping.shipping_phone">
        </div>
        <div class="form-check">
            <label class="form-check-label">
            <input type="radio" class="form-check-input" name="payment_method" id="" value="cash_on_delivery" @click="paymentMethod('cash_on_delivery')">
            Cash On Delivery
          </label>
        </div>
        <div class="form-check">
            <label class="form-check-label">
            <input type="radio" class="form-check-input" name="payment_method" id="" value="bank_deposit" @click="paymentMethod('bank_deposit')">
            Bank Deposit
          </label>
        </div>
        <button class="btn btn-success btn-sm" @click="checkout()">Submit</button>
    </div>
</template>

<script>
export default {
    data() {
        return {
            shipping:{
                shipping_fullname:'',
                shipping_address: '',
                shipping_city: '',
                shipping_state: '',
                shipping_zipcode: '',
                shipping_phone: ''
            },
            payment_method:''
        }
    },

    methods: {
        checkout:function(){
            axios
            .post
        },
        paymentMethod:function(method){
            this.payment = method;
        }
    },
}
</script>

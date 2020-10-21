<template>
    <div>
        <body>
         <main>
            <div class="slider-area ">
                <div class="single-slider slider-height2 d-flex align-items-center">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="hero-cap text-center">
                                    <h2>Cart List</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <section class="cart_area section_padding">
                <div class="container">
                <div class="cart_inner">
                    <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">Product</th>
                            <th scope="col">Price</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr v-for="product in cart">
                            <td >
                            <div class="media">

                                <div class="media-body">
                                <p>{{product.title}}</p>
                                </div>
                            </div>
                            </td>
                            <td>
                            <h5>{{ product.price * product.count }}</h5>
                            </td>

                        </tr>

                        <tr>
                            <td>
                            <h5>All Total</h5>

                            </td>
                            <td>
                                {{ total }}
                            </td>

                        </tr>
                        <tr>
                            <td colspan="2">
                                <button class="btn btn-primary" @click="continueShopping()">Continue Shopping</button>
                                <button class="btn btn-primary" @click="checkout()">Checkout</button>
                            </td>
                        </tr>

                        </tbody>
                    </table>
                    </div>
                </div>
            </div>
            </section>
      <!--================End Cart Area =================-->
         </main>


        </body>


    </div>
</template>

<script>
export default {
    data() {
        return {
            cart:[],
            total:0
        }
    },
    methods:{
        getCart:function(){
            this.cart = this.$store.getters.StoreCart;
        },
        continueShopping:function(){
            this.$router.push({'path':'/'});
        },
        checkout:function(){
            this.$router.push({'path':'/checkout'});
        },

    },
    mounted(){
        this.getCart();
        this.cart.forEach(element => {
            this.total += (element.count * element.price);
        });
    }
}
</script>

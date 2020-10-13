<template>
    <div>
    <div class="slider-area ">
            <div class="single-slider slider-height2 d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap text-center">
                                <h2>Online Shop</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="product_image_area">
            <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                <div class="product_img_slide owl-carousel owl-loaded owl-drag">



                <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(-4560px, 0px, 0px); transition: all 0.25s ease 0s; width: 7980px;"><div class="owl-item cloned" style="width: 1140px;"><div class="single_product_img">
                        <img src="../../img/gallery/gallery01.png" alt="#" class="img-fluid">
                    </div></div><div class="owl-item cloned" style="width: 1140px;"><div class="single_product_img">
                        <img src="../../img/gallery/gallery1.png" alt="#" class="img-fluid">
                    </div></div><div class="owl-item" style="width: 1140px;"><div class="single_product_img">
                        <img src="../../img/gallery/gallery1.png" alt="#" class="img-fluid">
                    </div></div><div class="owl-item" style="width: 1140px;"><div class="single_product_img">
                        <img src="../../img/gallery/gallery01.png" alt="#" class="img-fluid">
                    </div></div><div class="owl-item active" style="width: 1140px;"><div class="single_product_img">
                        <img src="../../img/gallery/gallery1.png" alt="#" class="img-fluid">
                    </div></div><div class="owl-item cloned" style="width: 1140px;"><div class="single_product_img">
                        <img src="../../img/gallery/gallery1.png" alt="#" class="img-fluid">
                    </div></div><div class="owl-item cloned" style="width: 1140px;"><div class="single_product_img">
                        <img src="../../img/gallery/gallery01.png" alt="#" class="img-fluid">
                    </div></div></div></div><div class="owl-nav"><button type="button" role="presentation" class="owl-prev"> <i class="ti-angle-left"></i> </button><button type="button" role="presentation" class="owl-next"><i class="ti-angle-right"></i> </button></div><div class="owl-dots disabled"></div></div>
                </div>
                <div class="col-lg-8">
                <div class="single_product_text text-center">
                    <h3>{{detail.title}}</h3>
                    <p>{{detail.description}}</p>
                    <div class="card_area">
                        <div class="product_count_area">
                            <p>Quantity</p>
                            <div class="product_count d-inline-block">
                                <span class="product_count_item inumber-decrement"> <i class="ti-minus"></i></span>
                                <input class="product_count_item input-number" type="text" value="1" min="0" max="10">
                                <span class="product_count_item number-increment"> <i class="ti-plus"></i></span>
                            </div>
                            <p>{{detail.price}}</p>
                        </div>
                    <div class="add_to_cart">
                        <a href="#" class="btn_3">add to cart</a>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data: function(){
        return {
            detail: [],
            slug: ''
        }
    },
    created(){
        this.slug = this.$route.params.slug;
    },
    methods: {
        getProductDetail: function(){
            axios.get('/api/product/'+ this.slug)
            .then((response)=>{
                this.detail = response.data;
            })
            .catch((error)=>{
                console.log(error);
            })
        }
    },
    mounted(){
        this.getProductDetail();
    }

}
</script>

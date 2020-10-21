<template>
  <div>
    <div class="slider-area">
      <div class="single-slider slider-height2 d-flex align-items-center">
        <div class="container">
          <div class="row">
            <div class="col-xl-12">
              <div class="hero-cap text-center">
                <h2>{{ detail.title }}</h2>
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
            <img class="feature_img" :src="app_url + '/images/product/' + detail.feature_image" alt="" />
          </div>
        </div>

        <div class="col-lg-12">
          <div class="single_product_text text-center">
            <h3>{{ detail.title }}</h3>
            <p>{{ detail.description }}</p>
            <div class="col-md-3" v-for="image in detail.product_images">
              <img
                class="prod_img"
                data-toggle="modal"
                data-target="#exampleModal"
                @click="setModalImg(app_url + '/images/product/' + image.product_img)"
                :src="app_url + '/images/product/' + image.product_img"
              />
            </div>
            <div class="card_area">
              <div class="product_count_area">
                <p>Quantity</p>
                <div class="product_count d-inline-block">

                  <input
                    class="product_count_item input-number"
                    type="number"
                    v-model.count="count"
                    min="0"
                    max="10"
                  />

                </div>
                <p>{{ detail.price }}</p>
              </div>
              <div class="add_to_cart">
                <a class="btn_3" @click="addProductToCart(detail)">Add to cart</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div
      class="modal fade"
      id="exampleModal"
      tabindex="-1"
      role="dialog"
      aria-labelledby="exampleModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">{{ detail.title }}</h5>
            <button
              type="button"
              class="close"
              data-dismiss="modal"
              aria-label="Close"
            >
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body"><img :src="modal_img"></div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data: function () {
    return {
      detail: [],
      count: 1,
      slug: '',
      app_url: process.env.MIX_APP_URL,
      modal_img: '',
    };
  },
  created() {
    this.slug = this.$route.params.slug;
  },
  methods: {
    getProductDetail: function () {
      axios
        .get("/api/product/" + this.slug)
        .then((response) => {
          this.detail = response.data.data;
        })
        .catch((error) => {
          console.log(error);
        });
    },
    setModalImg:function(image){
        this.modal_img= image;
    },
    addProductToCart:function(detail){
        detail['count'] = this.count;
        this.$store.dispatch('addItem', detail);
    }
  },
  mounted() {
    this.getProductDetail();
  },
};
</script>

<style scoped>
.prod_img {
  width: 100%;
}

.single_product_text .col-md-3 {
  display: inline-block;
}

.modal-body img{
    width: 100%;
}
.feature_img {
    display: block;
    margin: 0 auto;
}
</style>

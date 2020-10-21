import Vue from "vue";
import Vuex from "vuex";
import router from './router'

Vue.use(Vuex);

export default new Vuex.Store({
  state: {
    products: [

    ],

    StoreCart: [],
  },
  getters: {
    products: (state) => state.products,
    StoreCart: (state) => state.StoreCart,
  },

  mutations: {

    getProducts: function(){
        axios.get('/api/products')
        .then((response)=>{
            this.products = response.data.data;
        })
        .catch((error)=>{
            console.log(error);
        })
    },
    ADD_Item(state, detail) {
        const prod = state.StoreCart;
        const index = prod.findIndex(prod => prod.id === detail.id);
        if (index > -1) {
        state.StoreCart.splice(index, 1);
}
        state.StoreCart.push(detail);
        router.push({'path':'/product/addToCart/'+ detail.id});
    },

    REMOVE_Item(state, productId) {
        state.StoreCart.splice(state.StoreCart.findIndex(({id}) => id == productId), 1);
    },
  },
  actions: {
    addItem(context, product) {
        context.commit("ADD_Item", product);
    },
    removeItem(context, productId) {
      context.commit("REMOVE_Item", productId);
    },
  },
  modules: {},
});

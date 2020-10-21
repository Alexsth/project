import Vue from 'vue'
import Router from 'vue-router'
import Home from './components/Home.vue'
import About from './components/About.vue'
import ProductDetail from './components/ProductDetail.vue'
import Cart from './components/Cart.vue'
import Checkout from './components/Checkout.vue'
import Register from './components/user/Register.vue'
import Login from './components/user/Login.vue'

Vue.use(Router)

const routes = [
    {
        path: '/',
        name: 'home',
        component: Home
    },
    {
        path: '/about',
        name: 'about',
        component: About
    },
    {
        path:'/product/:slug',
        name:'productDetail',
        component: ProductDetail
    },
    {
        path:'/product/addToCart/:id',
        name:'addToCart',
        component: Cart
    },
    {
        path:'/checkout',
        name:'checkout',
        component: Checkout
    },
    {
        path:'/user/register',
        name:'userRegister',
        component: Register
    },
    {
        path:'/user/login',
        name:'userLogin',
        component: Login
    }
]

const router = new Router({
    mode: 'history',
    base: process.env.BASE_URL,
    routes
})

export default router

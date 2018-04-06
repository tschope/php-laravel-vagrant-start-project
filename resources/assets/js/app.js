
/**
 * First we will load all of this project's JavaScript dependencies which
 * include Vue and Vue Resource. This gives a great starting point for
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap')

/**
 * We will create a fresh Vue application instance and attach it to
 * the body of the page. From here, you may begin adding components to
 * the application, or feel free to tweak this setup for your needs.
 */
import VueRouter  from 'vue-router'
import router     from './router'
import Vue        from 'vue'
import VueAxios   from 'vue-axios'
import axios      from 'axios'
import VeeValidate from 'vee-validate'

Vue.use(VeeValidate)
Vue.use(VueAxios, axios)
Vue.use(VueRouter)

// lazy load components
const Trip = (resolve) => require(['./components/Trip.vue'], resolve)

// Create and mount root instance.
// Make sure to inject the router.
// Route components will be rendered inside <router-view>.
new Vue({

  router,

  components : {
    Trip
  },

  data : {

  }

}).$mount('#app')

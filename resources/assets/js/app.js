/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap')
window.Vue = require('vue')

// define global mixin
Vue.mixin({
  data: function () {
    return {
      get csrf_token(){
        return window._token
      }
    }
  }
})
Vue.component('flash', require('./components/Flash.vue'))
Vue.component('navigation', require('./components/Navigation.vue'))
Vue.component('modal', require('./components/Modal.vue'))

const app = new Vue({
  el: '#app',
  mounted () {
    $(document).foundation()
  }
})

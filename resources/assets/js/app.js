/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap')
window.Vue = require('vue')
// plugins
require('jquery-steps/dist/jquery-steps')
require('parsleyjs')
window.pace = require('pace-progress')
// define global mixin
Vue.mixin({
  data: function () {
    return {
      get csrf_token () {
        return window._token
      }
    }
  }
})
Vue.component('flash', require('./components/Flash.vue'))
Vue.component('navigation', require('./components/Navigation.vue'))
Vue.component('modal', require('./components/Modal.vue'))
Vue.component('group-chat', require('./components/GroupChat.vue'))
Vue.component('doc-loader', require('./components/Doc-Loader.vue'))

const app = new Vue({
  el: '#app',
  mounted () {
    $(this.$el).foundation()
    pace.start()
  },
  destroyed () {
    $(this.$el).foundation.destroy()
  }
})

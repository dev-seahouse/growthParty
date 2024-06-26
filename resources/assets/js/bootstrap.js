// window._ = require('lodash');
/**
 * We'll load jQuery and the Bootstrap jQuery plugin which provides support
 * for JavaScript based Bootstrap features such as modals and tabs. This
 * code may be modified to fit the specific needs of your application.
 */
import Echo from 'laravel-echo'

try {
  global.$ = global.jQuery = window.$ = window.jQuery = require('jquery')
  require('what-input')
  window.Headroom = require('headroom.js')
} catch (e) {
  console.log(e)
}

require('jquery.counterup')
require('select2')
/**
 * We'll load the axios HTTP library which allows us to easily issue requests
 * to our Laravel back-end. This library automatically handles sending the
 * CSRF token as a header based on the value of the "XSRF" token cookie.
 */

window.axios = require('axios')
window.axios.defaults.headers.common['X-CSRF-TOKEN'] = window.Laravel.csrfToken
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest'

/**
 * Echo exposes an expressive API for subscribing to channels and listening
 * for events that are broadcast by Laravel. Echo and event broadcasting
 * allows your team to easily build robust real-time web applications.
 */

window.Pusher = require('pusher-js')
window.Echo = new Echo({
  broadcaster: 'pusher',
  key: '0f79f672938bb64dc222',
  cluster: 'ap1',
  encrypted: true
})

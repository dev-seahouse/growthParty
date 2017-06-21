// google analytics
(function (i, s, o, g, r, a, m) {
  i['GoogleAnalyticsObject'] = r
  i[r] = i[r] || function () {
      (i[r].q = i[r].q || []).push(arguments)
    }, i[r].l = 1 * new Date()
  a = s.createElement(o),
    m = s.getElementsByTagName(o)[0]
  a.async = 1
  a.src = g
  m.parentNode.insertBefore(a, m)
})(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga')

ga('create', 'UA-32995284-5', 'auto')
ga('send', 'pageview')

// facebook connect api init
window.fbAsyncInit = function () {
  FB.init({
    appId: '756709494453863',
    xfbml: true,
    version: 'v2.8'
  })
  FB.AppEvents.logPageView()
};

(function (d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0]
  if (d.getElementById(id)) {return}
  js = d.createElement(s)
  js.id = id
  js.src = '//connect.facebook.net/en_US/sdk.js'
  fjs.parentNode.insertBefore(js, fjs)
}(document, 'script', 'facebook-jssdk'))

// HubSpot Script Loader. Please do not block this resource. See more: http://hubs.ly/H0702_H0
function loadForm () {
  (function (id, src, attrs) {
    if (document.getElementById(id)) { return }
    var js = document.createElement('script')
    js.src = src
    js.type = 'text/javascript'
    js.id = id
    for (var name in attrs) { if (attrs.hasOwnProperty(name)) { js.setAttribute(name, attrs[name]) } }
    var e = document.getElementsByTagName('script')[0]
    e.parentNode.insertBefore(js, e)
  })('CollectedForms-3327713', 'https://js.hscollectedforms.net/collectedforms.js', {
    'crossorigin': 'anonymous',
    'data-leadin-portal-id': 3327713,
    'data-leadin-env': 'prod',
    'data-loader': 'hs-scriptloader'
  });
  
  (function (id, src, attrs) {
    if (document.getElementById(id)) { return }
    var js = document.createElement('script')
    js.src = src
    js.type = 'text/javascript'
    js.id = id
    for (var name in attrs) { if (attrs.hasOwnProperty(name)) { js.setAttribute(name, attrs[name]) } }
    var e = document.getElementsByTagName('script')[0]
    e.parentNode.insertBefore(js, e)
  })('messages-3327713', 'https://api.usemessages.com/messages/v2/embed/3327713.js', {'data-loader': 'hs-scriptloader'});
  
  (function (id, src, attrs) {
    if (document.getElementById(id)) { return }
    var js = document.createElement('script')
    js.src = src
    js.type = 'text/javascript'
    js.id = id
    for (var name in attrs) { if (attrs.hasOwnProperty(name)) { js.setAttribute(name, attrs[name]) } }
    var e = document.getElementsByTagName('script')[0]
    e.parentNode.insertBefore(js, e)
  })('LeadFlows-3327713', 'https://js.hsleadflows.net/leadflows.js', {
    'crossorigin': 'anonymous',
    'data-leadin-portal-id': 3327713,
    'data-leadin-env': 'prod',
    'data-loader': 'hs-scriptloader'
  });
  
  (function (id, src, attrs) {
    if (document.getElementById(id)) { return }
    var js = document.createElement('script')
    js.src = src
    js.type = 'text/javascript'
    js.id = id
    for (var name in attrs) { if (attrs.hasOwnProperty(name)) { js.setAttribute(name, attrs[name]) } }
    var e = document.getElementsByTagName('script')[0]
    e.parentNode.insertBefore(js, e)
  })('hs-analytics', '//js.hs-analytics.net/analytics/1496247900000/3327713.js', {'data-loader': 'hs-scriptloader'})
}

loadForm()

function delete_cookie (name) {
  document.cookie = name + '=; expires=Thu, 01 Jan 1970 00:00:01 GMT;'
}

window.onbeforeunload = function () {
  delete_cookie('__hstc')
  delete_cookie('__hssc')
  delete_cookie('hubspotutk')
  delete_cookie('__hssrc')
  localStorage.clear()
}


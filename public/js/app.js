webpackJsonp([2],{11:function(t,e){t.exports=function(t,e,n,o){var r,i=t=t||{},a=typeof t.default;"object"!==a&&"function"!==a||(r=t,i=t.default);var s="function"==typeof i?i.options:i;if(e&&(s.render=e.render,s.staticRenderFns=e.staticRenderFns),n&&(s._scopeId=n),o){var u=Object.create(s.computed||null);Object.keys(o).forEach(function(t){var e=o[t];u[t]=function(){return e}}),s.computed=u}return{esModule:r,exports:i,options:s}}},13:function(t,e,n){(function(t){n(36),window.Vue=n(5),Vue.component("flash",n(66)),Vue.component("navigation",n(67));new Vue({el:"#app",mounted:function(){t(document).foundation()}})}).call(e,n(0))},34:function(t,e,n){"use strict";Object.defineProperty(e,"__esModule",{value:!0}),e.default={data:function(){return{body:"Temp for now"}},mounted:function(){}}},35:function(t,e,n){"use strict";Object.defineProperty(e,"__esModule",{value:!0}),e.default={mounted:function(){},methods:{}}},36:function(t,e,n){(function(t,e){try{e.$=e.jQuery=window.$=n(0),n(70)}catch(t){}n(4),window.axios=n(3),window.axios.defaults.headers.common["X-CSRF-TOKEN"]=window.Laravel.csrfToken,window.axios.defaults.headers.common["X-Requested-With"]="XMLHttpRequest"}).call(e,n(0),n(12))},66:function(t,e,n){var o=n(11)(n(34),n(69),null,null);t.exports=o.exports},67:function(t,e,n){var o=n(11)(n(35),n(68),null,null);t.exports=o.exports},68:function(t,e){t.exports={render:function(){var t=this,e=t.$createElement;t._self._c;return t._m(0)},staticRenderFns:[function(){var t=this,e=t.$createElement,n=t._self._c||e;return n("nav",[n("div",{staticClass:"title-bar drop-shadow",attrs:{"data-responsive-toggle":"top-menu","data-hide-for":"medium"}},[n("button",{staticClass:"menu-icon",attrs:{type:"button","data-toggle":"top-menu"}}),t._v(" "),n("img",{staticClass:"logo",attrs:{src:"images/logo.jpe",alt:""}}),t._v(" "),n("h4",{staticClass:"title-bar-title l-logo-text show-for-medium"},[t._v("Growth Party")]),t._v(" "),n("div",{attrs:{"data-magellan":""}},[n("a",{staticClass:"register button",attrs:{href:"#registerForm"}},[t._v("Join Our Beta")])])]),t._v(" "),n("div",{staticClass:"top-bar drop-shadow",attrs:{id:"top-menu"}},[n("div",{staticClass:"top-bar-left"},[n("ul",{staticClass:"vertical medium-horizontal menu align-right",attrs:{"data-dropdown-menu":""}},[n("li",{staticClass:"menu-text show-for-medium flex-align-left"},[n("img",{staticClass:"logo",attrs:{src:"images/logo.jpe",alt:"company logo"}}),t._v("Growth Party")])])]),t._v(" "),n("div",{attrs:{"data-magellan":""}},[n("a",{staticClass:"register button show-for-medium",attrs:{href:"#registerForm"}},[t._v("Join Our Beta")])])])])}]}},69:function(t,e){t.exports={render:function(){var t=this,e=t.$createElement,n=t._self._c||e;return n("div",{staticClass:"alert callout",attrs:{role:"alert"}},[n("strong",[t._v("Success")]),t._v("\n    "+t._s(t.body)+"\n")])},staticRenderFns:[]}},70:function(t,e,n){/**
 * what-input - A global utility for tracking the current input method (mouse, keyboard or touch).
 * @version v4.1.3
 * @link https://github.com/ten1seven/what-input
 * @license MIT
 */
!function(e,n){t.exports=n()}(0,function(){return function(t){function e(o){if(n[o])return n[o].exports;var r=n[o]={exports:{},id:o,loaded:!1};return t[o].call(r.exports,r,r.exports,e),r.loaded=!0,r.exports}var n={};return e.m=t,e.c=n,e.p="",e(0)}([function(t,e){"use strict";t.exports=function(){var t=document.documentElement,e="initial",n=null,o=["input","select","textarea"],r=[16,17,18,91,93],i={keydown:"keyboard",mousedown:"mouse",mousemove:"mouse",MSPointerDown:"pointer",MSPointerMove:"pointer",pointerdown:"pointer",pointermove:"pointer",touchstart:"touch"},a=[],s=!1,u=!1,c={x:null,y:null},d={2:"touch",3:"touch",4:"mouse"},l=function(){window.PointerEvent?(t.addEventListener("pointerdown",f),t.addEventListener("pointermove",m)):window.MSPointerEvent?(t.addEventListener("MSPointerDown",f),t.addEventListener("MSPointerMove",m)):(t.addEventListener("mousedown",f),t.addEventListener("mousemove",m),"ontouchstart"in window&&(t.addEventListener("touchstart",v),t.addEventListener("touchend",v))),t.addEventListener(h(),m),t.addEventListener("keydown",f)},f=function(t){if(!s){var a=t.which,u=i[t.type];if("pointer"===u&&(u=w(t)),e!==u||n!==u){var c=document.activeElement,d=!1;c&&c.nodeName&&-1===o.indexOf(c.nodeName.toLowerCase())&&(d=!0),("touch"===u||"mouse"===u||"keyboard"===u&&d&&-1===r.indexOf(a))&&(e=n=u,p())}}},p=function(){t.setAttribute("data-whatinput",e),t.setAttribute("data-whatintent",e),-1===a.indexOf(e)&&(a.push(e),t.className+=" whatinput-types-"+e)},m=function(e){if(c.x!==e.screenX||c.y!==e.screenY?(u=!1,c.x=e.screenX,c.y=e.screenY):u=!0,!s&&!u){var o=i[e.type];"pointer"===o&&(o=w(e)),n!==o&&(n=o,t.setAttribute("data-whatintent",n))}},v=function(t){"touchstart"===t.type?(s=!1,f(t)):s=!0},w=function(t){return"number"==typeof t.pointerType?d[t.pointerType]:"pen"===t.pointerType?"touch":t.pointerType},h=function(){return"onwheel"in document.createElement("div")?"wheel":void 0!==document.onmousewheel?"mousewheel":"DOMMouseScroll"};return"addEventListener"in window&&Array.prototype.indexOf&&function(){i[h()]="mouse",l(),p()}(),{ask:function(t){return"loose"===t?n:e},types:function(){return a}}}()}])})},72:function(t,e,n){t.exports=n(13)}},[72]);
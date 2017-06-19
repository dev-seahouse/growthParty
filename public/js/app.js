webpackJsonp([2],{

/***/ 13:
/***/ (function(module, exports, __webpack_require__) {

/* WEBPACK VAR INJECTION */(function($) {/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

__webpack_require__(37);
window.Vue = __webpack_require__(6

// plugins
);__webpack_require__(38
// define global mixin
);Vue.mixin({
  data: function data() {
    return {
      get csrf_token() {
        return window._token;
      }
    };
  }
});
Vue.component('flash', __webpack_require__(68));
Vue.component('navigation', __webpack_require__(70));
Vue.component('modal', __webpack_require__(69));

var app = new Vue({
  el: '#app',
  mounted: function mounted() {
    $(document).foundation();
  }
});
/* WEBPACK VAR INJECTION */}.call(exports, __webpack_require__(0)))

/***/ }),

/***/ 3:
/***/ (function(module, exports) {

// this module is a runtime utility for cleaner component module output and will
// be included in the final webpack user bundle

module.exports = function normalizeComponent (
  rawScriptExports,
  compiledTemplate,
  scopeId,
  cssModules
) {
  var esModule
  var scriptExports = rawScriptExports = rawScriptExports || {}

  // ES6 modules interop
  var type = typeof rawScriptExports.default
  if (type === 'object' || type === 'function') {
    esModule = rawScriptExports
    scriptExports = rawScriptExports.default
  }

  // Vue.extend constructor export interop
  var options = typeof scriptExports === 'function'
    ? scriptExports.options
    : scriptExports

  // render functions
  if (compiledTemplate) {
    options.render = compiledTemplate.render
    options.staticRenderFns = compiledTemplate.staticRenderFns
  }

  // scopedId
  if (scopeId) {
    options._scopeId = scopeId
  }

  // inject cssModules
  if (cssModules) {
    var computed = Object.create(options.computed || null)
    Object.keys(cssModules).forEach(function (key) {
      var module = cssModules[key]
      computed[key] = function () { return module }
    })
    options.computed = computed
  }

  return {
    esModule: esModule,
    exports: scriptExports,
    options: options
  }
}


/***/ }),

/***/ 34:
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
Object.defineProperty(__webpack_exports__, "__esModule", { value: true });
//
//
//
//
//
//
//

/* harmony default export */ __webpack_exports__["default"] = ({
    data: function data() {
        return {
            body: "Temp for now"
        };
    },
    mounted: function mounted() {
        console.log('Component mounted.');
    }
});

/***/ }),

/***/ 35:
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
Object.defineProperty(__webpack_exports__, "__esModule", { value: true });
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//

/* harmony default export */ __webpack_exports__["default"] = ({
    props: ['labelledby', 'animation', 'closable', 'label', 'size', 'id', 'overlay'],
    computed: {
        cid: function cid() {
            if (this.id) {
                return this.id;
            }
            return "modal-" + this._uid;
        },
        animationin: function animationin() {
            if (this.animation) {
                return this.animation + '-in';
            }
            return "";
        },
        animationout: function animationout() {
            if (this.animation) {
                return this.animation + '-out';
            }
            return "";
        }
    }
});

/***/ }),

/***/ 36:
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* WEBPACK VAR INJECTION */(function($) {Object.defineProperty(__webpack_exports__, "__esModule", { value: true });
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//

/* harmony default export */ __webpack_exports__["default"] = ({
  data: function data() {
    return {
      loginId: "",
      password: "",
      passError: "",
      idError: ""
    };
  },

  mounted: function mounted() {
    $('.step-app').steps({
      onFinish: function onFinish() {
        $('#registerForm').submit();
      },
      onChange: function onChange(currentIndex, newIndex, stepDirection) {
        if (currentIndex === 0 && stepDirection == 'forward') {}
        return true;
      }
    });
  },
  methods: {
    onSubmit: function onSubmit() {
      var _this = this;

      axios.post("/login", {
        loginId: this.loginId,
        password: this.password
      }).then(function (response) {
        window.location.replace('/dashboard');
      }).catch(function (error) {
        console.log(error.response.data);
        error = error.response.data;
        _this.idError = error.mobile && (error.mobile || error.mobile.pop()) || error.email && (error.email || error.email.pop());
        if (Array.isArray(_this.idError)) {
          _this.idError = _this.idError.toString();
        }
        _this.passError = error.password && error.password.pop() || "";
      });
    }
  }
});
/* WEBPACK VAR INJECTION */}.call(__webpack_exports__, __webpack_require__(0)))

/***/ }),

/***/ 37:
/***/ (function(module, exports, __webpack_require__) {

/* WEBPACK VAR INJECTION */(function(__webpack_provided_window_dot_jQuery, global) {// window._ = require('lodash');

/**
 * We'll load jQuery and the Bootstrap jQuery plugin which provides support
 * for JavaScript based Bootstrap features such as modals and tabs. This
 * code may be modified to fit the specific needs of your application.
 */
try {
  global.$ = global.jQuery = window.$ = __webpack_provided_window_dot_jQuery = __webpack_require__(0);
  __webpack_require__(74);
} catch (e) {
  console.log(e);
}

__webpack_require__(5

/**
 * We'll load the axios HTTP library which allows us to easily issue requests
 * to our Laravel back-end. This library automatically handles sending the
 * CSRF token as a header based on the value of the "XSRF" token cookie.
 */

);window.axios = __webpack_require__(4);
window.axios.defaults.headers.common['X-CSRF-TOKEN'] = window.Laravel.csrfToken;
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

/**
 * Echo exposes an expressive API for subscribing to channels and listening
 * for events that are broadcast by Laravel. Echo and event broadcasting
 * allows your team to easily build robust real-time web applications.
 */

// import Echo from 'laravel-echo'

// window.Pusher = require('pusher-js');

// window.Echo = new Echo({
//     broadcaster: 'pusher',
//     key: 'your-pusher-key'
// });
/* WEBPACK VAR INJECTION */}.call(exports, __webpack_require__(0), __webpack_require__(12)))

/***/ }),

/***/ 38:
/***/ (function(module, exports, __webpack_require__) {

/* WEBPACK VAR INJECTION */(function($) {var __WEBPACK_AMD_DEFINE_FACTORY__, __WEBPACK_AMD_DEFINE_ARRAY__, __WEBPACK_AMD_DEFINE_RESULT__;var _typeof = typeof Symbol === "function" && typeof Symbol.iterator === "symbol" ? function (obj) { return typeof obj; } : function (obj) { return obj && typeof Symbol === "function" && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj; };

/*!
   * Steps v1.0.0
   * https://github.com/oguzhanoya/jquery-steps
   *
   * Copyright (c) 2017 oguzhanoya
   * Released under the MIT license
   */
!function (t, e) {
   "object" == ( false ? "undefined" : _typeof(exports)) && "undefined" != typeof module ? e(__webpack_require__(0)) :  true ? !(__WEBPACK_AMD_DEFINE_ARRAY__ = [__webpack_require__(0)], __WEBPACK_AMD_DEFINE_FACTORY__ = (e),
				__WEBPACK_AMD_DEFINE_RESULT__ = (typeof __WEBPACK_AMD_DEFINE_FACTORY__ === 'function' ?
				(__WEBPACK_AMD_DEFINE_FACTORY__.apply(exports, __WEBPACK_AMD_DEFINE_ARRAY__)) : __WEBPACK_AMD_DEFINE_FACTORY__),
				__WEBPACK_AMD_DEFINE_RESULT__ !== undefined && (module.exports = __WEBPACK_AMD_DEFINE_RESULT__)) : e(t.$);
}(this, function (t) {
   "use strict";
   t = "default" in t ? t.default : t;var e = { startAt: 0, showBackButton: !0, showFooterButtons: !0, onInit: $.noop, onDestroy: $.noop, onFinish: $.noop, onChange: function onChange() {
         return !0;
      } },
       n = function n(t, e) {
      if (!(t instanceof e)) throw new TypeError("Cannot call a class as a function");
   },
       i = function () {
      function t(t, e) {
         for (var n = 0; n < e.length; n++) {
            var i = e[n];i.enumerable = i.enumerable || !1, i.configurable = !0, "value" in i && (i.writable = !0), Object.defineProperty(t, i.key, i);
         }
      }return function (e, n, i) {
         return n && t(e.prototype, n), i && t(e, i), e;
      };
   }(),
       o = function () {
      function o(i, s) {
         n(this, o), this.options = t.extend({}, e, s), this.el = t(i), this.init();
      }return i(o, [{ key: "init", value: function value() {
            this.hook("onInit");var e = this;t(this.el).on("click", ".step-steps > li > a", function (n) {
               n.preventDefault();var i = t(this).closest("li").index(),
                   o = e.getStepIndex();e.setActiveStep(o, i);
            }), t(this.el).on("click", ".step-footer > button", function (n) {
               n.preventDefault();var i = t(this).data("direction");e.setAction(i);
            }), this.setShowStep(this.options.startAt, "", "active"), this.setFooterBtns(), this.options.showFooterButtons || (this.hideFooterBtns(), this.setFooterBtns = t.noop);
         } }, { key: "hook", value: function value(t) {
            void 0 !== this.options[t] && this.options[t].call(this.el);
         } }, { key: "destroy", value: function value() {
            this.el.empty(), this.el.removeData("plugin_Steps"), this.hook("onDestroy");
         } }, { key: "getStepIndex", value: function value() {
            return this.el.find(".step-steps > li.active").index() || 0;
         } }, { key: "getMaxStepCount", value: function value() {
            return this.el.find(".step-steps > li").length - 1;
         } }, { key: "getStepDirection", value: function value(t, e) {
            var n = "none";return e < t ? n = "backward" : e > t && (n = "forward"), n;
         } }, { key: "setShowStep", value: function value(e, n) {
            var i = arguments.length > 2 && void 0 !== arguments[2] ? arguments[2] : "";this.el.find(".step-content > .step-tab-panel").removeClass("active");var o = this.el.find(".step-steps > li").eq(e);o.removeClass(n).addClass(i);var s = o.find("a").attr("href");t(s).addClass("active");
         } }, { key: "setActiveStep", value: function value(t, e) {
            if (e !== t) {
               if (e > t) for (var n = 0; n <= e; n += 1) {
                  var i = n === e;i ? this.setShowStep(n, "done", "active") : this.setShowStep(n, "active error", "done");var o = this.getStepDirection(n, e),
                      s = this.options.onChange(n, e, o);if (!s) {
                     this.setShowStep(n, "done", "error active"), this.setFooterBtns();break;
                  }
               }if (t > e) for (var r = t; r >= e; r -= 1) {
                  var a = this.getStepDirection(r, e);this.options.onChange(r, e, a), this.setShowStep(r, "done active error"), r === e && this.setShowStep(r, "done error", "active");
               }this.setFooterBtns();
            }
         } }, { key: "setFooterBtns", value: function value() {
            var t = this.getStepIndex(),
                e = this.getMaxStepCount(),
                n = this.el.find(".step-footer");0 === t && n.find('button[data-direction="prev"]').hide(), t > 0 && this.options.showBackButton && n.find('button[data-direction="prev"]').show(), e === t ? (n.find('button[data-direction="prev"]').show(), n.find('button[data-direction="next"]').hide(), n.find('button[data-direction="finish"]').show()) : (n.find('button[data-direction="next"]').show(), n.find('button[data-direction="finish"]').hide()), this.options.showBackButton || n.find('button[data-direction="prev"]').hide();
         } }, { key: "setAction", value: function value(t) {
            var e = this.getStepIndex(),
                n = e;if ("prev" === t && (n -= 1), "next" === t && (n += 1), "finish" === t) {
               this.options.onChange(e, n, "forward") ? this.hook("onFinish") : this.setShowStep(e, "", "error");
            }"finish" !== t && this.setActiveStep(e, n);
         } }, { key: "hideFooterBtns", value: function value() {
            this.el.find(".step-footer").hide();
         } }], [{ key: "setDefaults", value: function value(n) {
            t.extend(e, t.isPlainObject(n) && n);
         } }]), o;
   }(),
       s = t.fn.steps;t.fn.steps = function (e) {
      return this.each(function () {
         t.data(this, "plugin_Steps") || t.data(this, "plugin_Steps", new o(this, e));
      });
   }, t.fn.steps.version = "1.0.0", t.fn.steps.setDefaults = o.setDefaults, t.fn.steps.noConflict = function () {
      return t.fn.steps = s, this;
   };
});
/* WEBPACK VAR INJECTION */}.call(exports, __webpack_require__(0)))

/***/ }),

/***/ 68:
/***/ (function(module, exports, __webpack_require__) {

var Component = __webpack_require__(3)(
  /* script */
  __webpack_require__(34),
  /* template */
  __webpack_require__(72),
  /* scopeId */
  null,
  /* cssModules */
  null
)
Component.options.__file = "/Users/kenan/Projects/growthParty/resources/assets/js/components/Flash.vue"
if (Component.esModule && Object.keys(Component.esModule).some(function (key) {return key !== "default" && key !== "__esModule"})) {console.error("named exports are not supported in *.vue files.")}
if (Component.options.functional) {console.error("[vue-loader] Flash.vue: functional components are not supported with templates, they should use render functions.")}

/* hot reload */
if (false) {(function () {
  var hotAPI = require("vue-hot-reload-api")
  hotAPI.install(require("vue"), false)
  if (!hotAPI.compatible) return
  module.hot.accept()
  if (!module.hot.data) {
    hotAPI.createRecord("data-v-7beea40e", Component.options)
  } else {
    hotAPI.reload("data-v-7beea40e", Component.options)
  }
})()}

module.exports = Component.exports


/***/ }),

/***/ 69:
/***/ (function(module, exports, __webpack_require__) {

var Component = __webpack_require__(3)(
  /* script */
  __webpack_require__(35),
  /* template */
  __webpack_require__(73),
  /* scopeId */
  null,
  /* cssModules */
  null
)
Component.options.__file = "/Users/kenan/Projects/growthParty/resources/assets/js/components/Modal.vue"
if (Component.esModule && Object.keys(Component.esModule).some(function (key) {return key !== "default" && key !== "__esModule"})) {console.error("named exports are not supported in *.vue files.")}
if (Component.options.functional) {console.error("[vue-loader] Modal.vue: functional components are not supported with templates, they should use render functions.")}

/* hot reload */
if (false) {(function () {
  var hotAPI = require("vue-hot-reload-api")
  hotAPI.install(require("vue"), false)
  if (!hotAPI.compatible) return
  module.hot.accept()
  if (!module.hot.data) {
    hotAPI.createRecord("data-v-f081db94", Component.options)
  } else {
    hotAPI.reload("data-v-f081db94", Component.options)
  }
})()}

module.exports = Component.exports


/***/ }),

/***/ 70:
/***/ (function(module, exports, __webpack_require__) {

var Component = __webpack_require__(3)(
  /* script */
  __webpack_require__(36),
  /* template */
  __webpack_require__(71),
  /* scopeId */
  null,
  /* cssModules */
  null
)
Component.options.__file = "/Users/kenan/Projects/growthParty/resources/assets/js/components/Navigation.vue"
if (Component.esModule && Object.keys(Component.esModule).some(function (key) {return key !== "default" && key !== "__esModule"})) {console.error("named exports are not supported in *.vue files.")}
if (Component.options.functional) {console.error("[vue-loader] Navigation.vue: functional components are not supported with templates, they should use render functions.")}

/* hot reload */
if (false) {(function () {
  var hotAPI = require("vue-hot-reload-api")
  hotAPI.install(require("vue"), false)
  if (!hotAPI.compatible) return
  module.hot.accept()
  if (!module.hot.data) {
    hotAPI.createRecord("data-v-24338ddb", Component.options)
  } else {
    hotAPI.reload("data-v-24338ddb", Component.options)
  }
})()}

module.exports = Component.exports


/***/ }),

/***/ 71:
/***/ (function(module, exports, __webpack_require__) {

module.exports={render:function (){var _vm=this;var _h=_vm.$createElement;var _c=_vm._self._c||_h;
  return _c('nav', [_vm._m(0), _vm._v(" "), _vm._m(1), _vm._v(" "), _c('modal', {
    staticClass: "small",
    attrs: {
      "id": "loginModal",
      "closable": "true"
    }
  }, [_c('h3', {
    slot: "title"
  }, [_vm._v("Login")]), _vm._v(" "), _c('form', {
    attrs: {
      "action": "/login",
      "method": "post"
    },
    on: {
      "submit": function($event) {
        $event.preventDefault();
        _vm.onSubmit($event)
      }
    }
  }, [_c('input', {
    attrs: {
      "type": "hidden",
      "name": "_token"
    },
    domProps: {
      "value": _vm.csrf_token
    }
  }), _vm._v(" "), _c('div', {
    staticClass: "row"
  }, [_c('div', {
    staticClass: "small-12 columns"
  }, [_c('label', [_vm._v("Email or phone"), _c('input', {
    directives: [{
      name: "model",
      rawName: "v-model",
      value: (_vm.loginId),
      expression: "loginId"
    }],
    attrs: {
      "type": "text",
      "name": "loginId",
      "placeholder": "Enter email or mobile"
    },
    domProps: {
      "value": (_vm.loginId)
    },
    on: {
      "input": function($event) {
        if ($event.target.composing) { return; }
        _vm.loginId = $event.target.value
      }
    }
  })]), _vm._v(" "), _c('span', {
    staticClass: "form-error is-visible"
  }, [_vm._v(_vm._s(_vm.idError))])])]), _vm._v(" "), _c('div', {
    staticClass: "row"
  }, [_c('div', {
    staticClass: "small-12 columns"
  }, [_c('label', [_vm._v("Password"), _c('input', {
    directives: [{
      name: "model",
      rawName: "v-model",
      value: (_vm.password),
      expression: "password"
    }],
    attrs: {
      "type": "password",
      "name": "password",
      "placeholder": "Enter password"
    },
    domProps: {
      "value": (_vm.password)
    },
    on: {
      "input": function($event) {
        if ($event.target.composing) { return; }
        _vm.password = $event.target.value
      }
    }
  })]), _vm._v(" "), _c('span', {
    staticClass: "form-error is-visible"
  }, [_vm._v(_vm._s(_vm.passError))])])]), _vm._v(" "), _c('div', {
    staticClass: "row column"
  }, [_c('button', {
    staticClass: "button",
    attrs: {
      "type": "submit"
    }
  }, [_vm._v("Login")])])])]), _vm._v(" "), _c('modal', {
    staticClass: "small",
    attrs: {
      "id": "registerModal",
      "closable": "true"
    }
  }, [_c('form', {
    attrs: {
      "action": "/register",
      "method": "post",
      "id": "registerForm"
    }
  }, [_c('h3', {
    slot: "title"
  }, [_vm._v("Register")]), _vm._v(" "), _c('p', [_vm._v("Please enter your mobile number to get started!")]), _vm._v(" "), _c('div', {
    staticClass: "step-app"
  }, [_c('ul', {
    staticClass: "step-steps"
  }, [_c('li', [_c('a', {
    attrs: {
      "href": "#step1"
    }
  }, [_vm._v("Step 1 - Enter")])]), _vm._v(" "), _c('li', [_c('a', {
    attrs: {
      "href": "#step2"
    }
  }, [_vm._v("Step 2 - Verify")])])]), _vm._v(" "), _c('div', {
    staticClass: "step-content"
  }, [_c('div', {
    staticClass: "step-tab-panel",
    attrs: {
      "id": "step1"
    }
  }, [_c('input', {
    attrs: {
      "type": "hidden",
      "name": "_token"
    },
    domProps: {
      "value": _vm.csrf_token
    }
  }), _vm._v(" "), _c('div', {
    staticClass: "row"
  }, [_c('div', {
    staticClass: "small-12 columns"
  }, [_c('label', [_vm._v("Email"), _c('input', {
    attrs: {
      "type": "email",
      "name": "email",
      "placeholder": "Enter email"
    }
  })])])]), _vm._v(" "), _c('div', {
    staticClass: "row"
  }, [_c('div', {
    staticClass: "small-12 columns"
  }, [_c('label', [_vm._v("Phone No."), _c('input', {
    attrs: {
      "type": "text",
      "name": "mobile",
      "placeholder": "Enter phone no."
    }
  })])])]), _vm._v(" "), _c('div', {
    staticClass: "row"
  }, [_c('div', {
    staticClass: "small-12 columns"
  }, [_c('label', [_vm._v("Password"), _c('input', {
    attrs: {
      "type": "password",
      "name": "password",
      "placeholder": "Enter password"
    }
  })])])])]), _vm._v(" "), _c('div', {
    staticClass: "step-tab-panel",
    attrs: {
      "id": "step2"
    }
  })]), _vm._v(" "), _c('div', {
    staticClass: "row"
  }, [_c('div', {
    staticClass: "step-footer"
  }, [_c('button', {
    staticClass: "button",
    attrs: {
      "data-direction": "prev"
    }
  }, [_vm._v("Previous")]), _vm._v(" "), _c('button', {
    staticClass: "button",
    attrs: {
      "data-direction": "next"
    }
  }, [_vm._v("Confirm")]), _vm._v(" "), _c('button', {
    staticClass: "button",
    attrs: {
      "data-direction": "finish",
      "type": "submit"
    }
  }, [_vm._v("Register")])])])])])])], 1)
},staticRenderFns: [function (){var _vm=this;var _h=_vm.$createElement;var _c=_vm._self._c||_h;
  return _c('div', {
    staticClass: "title-bar drop-shadow",
    attrs: {
      "data-responsive-toggle": "top-menu",
      "data-hide-for": "medium"
    }
  }, [_c('button', {
    staticClass: "menu-icon",
    attrs: {
      "type": "button",
      "data-toggle": "top-menu"
    }
  }), _vm._v(" "), _c('img', {
    staticClass: "l-logo-img",
    attrs: {
      "src": "/images/logo.jpe",
      "alt": ""
    }
  }), _vm._v(" "), _c('h4', {
    staticClass: "title-bar-title l-logo-text show-for-medium"
  }, [_vm._v("Growth Party")]), _vm._v(" "), _c('div', {
    attrs: {
      "data-magellan": ""
    }
  }, [_c('a', {
    staticClass: "register button m-b-0",
    attrs: {
      "data-open": "registerModal"
    }
  }, [_vm._v("Join Our Beta")])])])
},function (){var _vm=this;var _h=_vm.$createElement;var _c=_vm._self._c||_h;
  return _c('div', {
    staticClass: "top-bar drop-shadow p-v-0",
    attrs: {
      "id": "top-menu"
    }
  }, [_c('div', {
    staticClass: "top-bar-left"
  }, [_c('ul', {
    staticClass: "vertical medium-horizontal menu align-right",
    attrs: {
      "data-dropdown-menu": ""
    }
  }, [_c('li', {
    staticClass: "menu-text show-for-medium flex-pull-left"
  }, [_c('a', {
    staticClass: "logo",
    attrs: {
      "href": "/"
    }
  }, [_c('img', {
    staticClass: "l-logo-img",
    attrs: {
      "src": "/images/logo.jpe",
      "alt": "company logo"
    }
  }), _c('span', {
    staticClass: "logo-text"
  }, [_vm._v("Growth Party")])])]), _vm._v(" "), _c('li', {
    staticClass: "menu-text m-r-0 p-r-0"
  }, [_c('a', {
    attrs: {
      "href": "/blog"
    }
  }, [_vm._v("Blog")])]), _vm._v(" "), _c('li', {
    staticClass: "menu-text"
  }, [_c('a', {
    attrs: {
      "data-open": "loginModal"
    }
  }, [_vm._v("Login")])])])]), _vm._v(" "), _c('div', {
    attrs: {
      "data-magellan": ""
    }
  }, [_c('a', {
    staticClass: "register button show-for-medium m-b-0",
    attrs: {
      "data-open": "registerModal"
    }
  }, [_vm._v("Join Our Beta")])])])
}]}
module.exports.render._withStripped = true
if (false) {
  module.hot.accept()
  if (module.hot.data) {
     require("vue-hot-reload-api").rerender("data-v-24338ddb", module.exports)
  }
}

/***/ }),

/***/ 72:
/***/ (function(module, exports, __webpack_require__) {

module.exports={render:function (){var _vm=this;var _h=_vm.$createElement;var _c=_vm._self._c||_h;
  return _c('div', {
    staticClass: "alert callout",
    attrs: {
      "role": "alert"
    }
  }, [_c('strong', [_vm._v("Success")]), _vm._v("\n    " + _vm._s(_vm.body) + "\n")])
},staticRenderFns: []}
module.exports.render._withStripped = true
if (false) {
  module.hot.accept()
  if (module.hot.data) {
     require("vue-hot-reload-api").rerender("data-v-7beea40e", module.exports)
  }
}

/***/ }),

/***/ 73:
/***/ (function(module, exports, __webpack_require__) {

module.exports={render:function (){var _vm=this;var _h=_vm.$createElement;var _c=_vm._self._c||_h;
  return _c('div', {
    staticClass: "reveal",
    class: _vm.size,
    attrs: {
      "id": _vm.cid,
      "data-reveal": "",
      "data-overlay": _vm.overlay,
      "data-animation-in": _vm.animationin,
      "data-animation-out": _vm.animationout,
      "aria-labelledby": _vm.labelledby
    }
  }, [_c('div', {
    staticClass: "row column"
  }, [_vm._t("title")], 2), _vm._v(" "), _vm._t("default"), _vm._v(" "), (_vm.closable) ? _c('button', {
    staticClass: "close-button",
    attrs: {
      "data-close": "",
      "aria-label": "Close Modal",
      "type": "button"
    }
  }, [_c('span', {
    attrs: {
      "aria-hidden": "true"
    }
  }, [_vm._v("×")])]) : _vm._e()], 2)
},staticRenderFns: []}
module.exports.render._withStripped = true
if (false) {
  module.hot.accept()
  if (module.hot.data) {
     require("vue-hot-reload-api").rerender("data-v-f081db94", module.exports)
  }
}

/***/ }),

/***/ 74:
/***/ (function(module, exports, __webpack_require__) {

/**
 * what-input - A global utility for tracking the current input method (mouse, keyboard or touch).
 * @version v4.1.3
 * @link https://github.com/ten1seven/what-input
 * @license MIT
 */
(function webpackUniversalModuleDefinition(root, factory) {
	if(true)
		module.exports = factory();
	else if(typeof define === 'function' && define.amd)
		define("whatInput", [], factory);
	else if(typeof exports === 'object')
		exports["whatInput"] = factory();
	else
		root["whatInput"] = factory();
})(this, function() {
return /******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};

/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {

/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId])
/******/ 			return installedModules[moduleId].exports;

/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			exports: {},
/******/ 			id: moduleId,
/******/ 			loaded: false
/******/ 		};

/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);

/******/ 		// Flag the module as loaded
/******/ 		module.loaded = true;

/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}


/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;

/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;

/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "";

/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(0);
/******/ })
/************************************************************************/
/******/ ([
/* 0 */
/***/ (function(module, exports) {

	'use strict';

	module.exports = function () {
	  /*
	   * variables
	   */

	  // cache document.documentElement
	  var docElem = document.documentElement;

	  // last used input type
	  var currentInput = 'initial';

	  // last used input intent
	  var currentIntent = null;

	  // form input types
	  var formInputs = ['input', 'select', 'textarea'];

	  // list of modifier keys commonly used with the mouse and
	  // can be safely ignored to prevent false keyboard detection
	  var ignoreMap = [16, // shift
	  17, // control
	  18, // alt
	  91, // Windows key / left Apple cmd
	  93 // Windows menu / right Apple cmd
	  ];

	  // mapping of events to input types
	  var inputMap = {
	    keydown: 'keyboard',
	    mousedown: 'mouse',
	    mousemove: 'mouse',
	    MSPointerDown: 'pointer',
	    MSPointerMove: 'pointer',
	    pointerdown: 'pointer',
	    pointermove: 'pointer',
	    touchstart: 'touch'
	  };

	  // array of all used input types
	  var inputTypes = [];

	  // boolean: true if touch buffer is active
	  var isBuffering = false;

	  // boolean: true if the page is being scrolled
	  var isScrolling = false;

	  // store current mouse position
	  var mousePos = {
	    x: null,
	    y: null
	  };

	  // map of IE 10 pointer events
	  var pointerMap = {
	    2: 'touch',
	    3: 'touch', // treat pen like touch
	    4: 'mouse'
	  };

	  /*
	   * set up
	   */

	  var setUp = function setUp() {
	    // add correct mouse wheel event mapping to `inputMap`
	    inputMap[detectWheel()] = 'mouse';

	    addListeners();
	    setInput();
	  };

	  /*
	   * events
	   */

	  var addListeners = function addListeners() {
	    // `pointermove`, `MSPointerMove`, `mousemove` and mouse wheel event binding
	    // can only demonstrate potential, but not actual, interaction
	    // and are treated separately

	    // pointer events (mouse, pen, touch)
	    if (window.PointerEvent) {
	      docElem.addEventListener('pointerdown', updateInput);
	      docElem.addEventListener('pointermove', setIntent);
	    } else if (window.MSPointerEvent) {
	      docElem.addEventListener('MSPointerDown', updateInput);
	      docElem.addEventListener('MSPointerMove', setIntent);
	    } else {
	      // mouse events
	      docElem.addEventListener('mousedown', updateInput);
	      docElem.addEventListener('mousemove', setIntent);

	      // touch events
	      if ('ontouchstart' in window) {
	        docElem.addEventListener('touchstart', touchBuffer);
	        docElem.addEventListener('touchend', touchBuffer);
	      }
	    }

	    // mouse wheel
	    docElem.addEventListener(detectWheel(), setIntent);

	    // keyboard events
	    docElem.addEventListener('keydown', updateInput);
	  };

	  // checks conditions before updating new input
	  var updateInput = function updateInput(event) {
	    // only execute if the touch buffer timer isn't running
	    if (!isBuffering) {
	      var eventKey = event.which;
	      var value = inputMap[event.type];
	      if (value === 'pointer') value = pointerType(event);

	      if (currentInput !== value || currentIntent !== value) {
	        var activeElem = document.activeElement;
	        var activeInput = false;

	        if (activeElem && activeElem.nodeName && formInputs.indexOf(activeElem.nodeName.toLowerCase()) === -1) {
	          activeInput = true;
	        }

	        if (value === 'touch' ||
	        // ignore mouse modifier keys
	        value === 'mouse' ||
	        // don't switch if the current element is a form input
	        value === 'keyboard' && activeInput && ignoreMap.indexOf(eventKey) === -1) {
	          // set the current and catch-all variable
	          currentInput = currentIntent = value;

	          setInput();
	        }
	      }
	    }
	  };

	  // updates the doc and `inputTypes` array with new input
	  var setInput = function setInput() {
	    docElem.setAttribute('data-whatinput', currentInput);
	    docElem.setAttribute('data-whatintent', currentInput);

	    if (inputTypes.indexOf(currentInput) === -1) {
	      inputTypes.push(currentInput);
	      docElem.className += ' whatinput-types-' + currentInput;
	    }
	  };

	  // updates input intent for `mousemove` and `pointermove`
	  var setIntent = function setIntent(event) {
	    // test to see if `mousemove` happened relative to the screen
	    // to detect scrolling versus mousemove
	    if (mousePos['x'] !== event.screenX || mousePos['y'] !== event.screenY) {
	      isScrolling = false;

	      mousePos['x'] = event.screenX;
	      mousePos['y'] = event.screenY;
	    } else {
	      isScrolling = true;
	    }

	    // only execute if the touch buffer timer isn't running
	    // or scrolling isn't happening
	    if (!isBuffering && !isScrolling) {
	      var value = inputMap[event.type];
	      if (value === 'pointer') value = pointerType(event);

	      if (currentIntent !== value) {
	        currentIntent = value;

	        docElem.setAttribute('data-whatintent', currentIntent);
	      }
	    }
	  };

	  // buffers touch events because they frequently also fire mouse events
	  var touchBuffer = function touchBuffer(event) {
	    if (event.type === 'touchstart') {
	      isBuffering = false;

	      // set the current input
	      updateInput(event);
	    } else {
	      isBuffering = true;
	    }
	  };

	  /*
	   * utilities
	   */

	  var pointerType = function pointerType(event) {
	    if (typeof event.pointerType === 'number') {
	      return pointerMap[event.pointerType];
	    } else {
	      // treat pen like touch
	      return event.pointerType === 'pen' ? 'touch' : event.pointerType;
	    }
	  };

	  // detect version of mouse wheel event to use
	  // via https://developer.mozilla.org/en-US/docs/Web/Events/wheel
	  var detectWheel = function detectWheel() {
	    var wheelType = void 0;

	    // Modern browsers support "wheel"
	    if ('onwheel' in document.createElement('div')) {
	      wheelType = 'wheel';
	    } else {
	      // Webkit and IE support at least "mousewheel"
	      // or assume that remaining browsers are older Firefox
	      wheelType = document.onmousewheel !== undefined ? 'mousewheel' : 'DOMMouseScroll';
	    }

	    return wheelType;
	  };

	  /*
	   * init
	   */

	  // don't start script unless browser cuts the mustard
	  // (also passes if polyfills are used)
	  if ('addEventListener' in window && Array.prototype.indexOf) {
	    setUp();
	  }

	  /*
	   * api
	   */

	  return {
	    // returns string: the current input type
	    // opt: 'loose'|'strict'
	    // 'strict' (default): returns the same value as the `data-whatinput` attribute
	    // 'loose': includes `data-whatintent` value if it's more current than `data-whatinput`
	    ask: function ask(opt) {
	      return opt === 'loose' ? currentIntent : currentInput;
	    },

	    // returns array: all the detected input types
	    types: function types() {
	      return inputTypes;
	    }
	  };
	}();

/***/ })
/******/ ])
});
;

/***/ }),

/***/ 76:
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(13);


/***/ })

},[76]);
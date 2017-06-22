const {mix} = require('laravel-mix')

mix.browserSync('growthparty.dev')
mix.autoload({
  jquery: ['$', 'jQuery', 'window.jQuery', 'jquery'],
  // tether: ['Tether', 'window.Tether']
})

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */
mix.copy('resources/assets/img/', 'public/images/')
mix.sass('resources/assets/sass/app.scss', 'public/css')
  .js('resources/assets/js/foundation.js', 'public/foundation-dist.js')
  .js('resources/assets/js/app.js', 'public/js')
  .js('resources/assets/js/analytics.js','public/js')
  .combine([
    'node_modules/fg-loadcss/src/loadCSS.js',
    'node_modules/fg-loadcss/src/cssrelpreload.js',
    'node_modules/fg-loadcss/src/onloadCSS.js'],
    'public/js/loadCSS.js')
  .extract(['vue', 'axios', 'jquery', 'jquery.counterup','headroom.js'])
  .version()

// combine vendor scripts that need to be compiled separately
mix.combine(
  [
    'public/js/vendor.js',
    'node_modules/progressively/dist/progressively.min.js',
    'public/foundation-dist.js'
  ],
  'public/js/vendor.js')



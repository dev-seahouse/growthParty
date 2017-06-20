const {mix} = require('laravel-mix')

mix.browserSync('growthparty.dev')
mix.autoload({
  jquery: ['$', 'jQuery', 'window.jQuery', 'jquery']
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
  .js('resources/assets/js/foundation.js', 'public/js')
  .js('resources/assets/js/app.js', 'public/js')
  .extract(['vue', 'axios', 'jquery', 'jquery.counterup'])
  .version()

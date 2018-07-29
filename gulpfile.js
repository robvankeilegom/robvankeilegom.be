const elixir = require( 'laravel-elixir' );

require( 'laravel-elixir-vue-2' );

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir( mix => {
    mix.copy( 'node_modules/@fortawesome/fontawesome-pro/webfonts', 'public/fonts' )
        .copy( 'node_modules/slick-carousel/slick/fonts', 'public/fonts' )
        .sass( 'app.scss' )
        .webpack( 'app.js' )
        .less( 'app.less', 'public/css/less.css' )

    //Brower Sync - Auto Reloading/Injecting
    /*
    .browserSync({
        proxy: 'vhost.dev'
    })
    */
} );
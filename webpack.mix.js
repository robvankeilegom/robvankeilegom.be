let mix = require( 'laravel-mix' );


mix.js( 'resources/assets/js/app.js', 'public/js' ).vue()
  .sass( 'resources/assets/sass/app.scss', 'public/css' );

if ( mix.inProduction() ) {
  mix.version();
}




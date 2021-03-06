const mix = require('laravel-mix');

mix.setPublicPath('public');
mix.setResourceRoot('../');

/* Copy Directories */
mix.copyDirectory('resources/assets/images', 'public/images');

/* CSS */
mix.sass('resources/assets/sass/app.scss', 'public/css/app.css');

/* JS */
mix.js('resources/assets/js/app.js', 'public/js/app.js')
    .extract([
        'alpinejs',
        'jquery',
        'bootstrap',
        'popper.js',
        'axios',
        'sweetalert2',
        'lodash'
    ]);

mix.sourceMaps();

if (mix.inProduction()) {
    mix.version();
} else {
    // Uses inline source-maps on development
    mix.webpackConfig({
        devtool: 'inline-source-map'
    });
}

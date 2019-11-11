const mix = require('laravel-mix');

// mix.autoload({
//     jquery: ['$', 'jQuery', 'jquery', 'window.jQuery'],
// });

mix.options({
    processCssUrls: false
});

mix.copy('node_modules/@fortawesome/fontawesome-free/webfonts/**', 'public/admin/webfonts');

mix.styles('resources/css/back.style.css', 'public/admin/css/all_css.css')
    .sass('resources/sass/app.scss', 'public/admin/css/all_sass.css')
    .js('resources/js/app.js', 'public/admin/js/all.js')
    .copyDirectory([
        'node_modules/admin-lte/dist/img'
    ], 'public/dist/img');

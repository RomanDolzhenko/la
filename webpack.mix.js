const mix = require('laravel-mix');


mix.styles([
        'node_modules/admin-lte/dist/css/adminlte.min.css',
        'resources/css/back.style.css',
    ], 'public/admin/css/all.css' )
    .js([
        'resources/js/app.js',
    ], 'public/admin/js/all.js')
    .copyDirectory(
        [
            'node_modules/admin-lte/dist/img'
        ], 'public/dist/img');

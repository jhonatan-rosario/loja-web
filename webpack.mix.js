const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

const jsFile = [
    'resources/js/app.js',
    'resources/js/loja.js'
];

mix.js(jsFile, 'public/js');
    
mix.postCss('resources/css/app.css', 'public/css', [
    require("tailwindcss"),
]);

mix.options({
    processCssUrls: false,
    postCss: [require('autoprefixer')]
});

// mix.styles('resources/css/*.css', 'public/css/app.css', [
//     require("tailwindcss")
// ]);

// .postCss('resources/css/loja.css', 'public/css').options({
//     processCssUrls: false
// });


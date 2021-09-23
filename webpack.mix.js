const mix = require('laravel-mix');
const tailwindcss = require("tailwindcss");


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

// mix.js('resources/js/app.js', 'public/js')
//     .postCss('resources/css/app.css', 'public/css', [
//     require('postcss-import'),
//     require('tailwindcss'),
//     require('autoprefixer'),
// ]);

mix
    .js("resources/js/app.js", "public/js")
    .sass("resources/sass/app.scss", "public/css")
    .options({
        processCssUrls: false,
        postCss: [tailwindcss("./tailwind.config.js")],
    })
    .autoload({
        "cash-dom": ["cash"],
    })
    // .webpackConfig({
    //     module: {
    //         rules: [
    //             {
    //                 test: CKERegex.svg,
    //                 use: ["raw-loader"],
    //             },
    //             {
    //                 test: CKERegex.css,
    //                 use: [
    //                     {
    //                         loader: "style-loader",
    //                         options: {
    //                             injectType: "singletonStyleTag",
    //                             attributes: {
    //                                 "data-cke": true,
    //                             },
    //                         },
    //                     },
    //                     "css-loader",
    //                     {
    //                         loader: "postcss-loader",
    //                         options: {
    //                             postcssOptions: styles.getPostCssConfig({
    //                                 themeImporter: {
    //                                     themePath: require.resolve(
    //                                         "@ckeditor/ckeditor5-theme-lark"
    //                                     ),
    //                                 },
    //                                 minify: true,
    //                             }),
    //                         },
    //                     },
    //                 ],
    //             },
    //         ],
    //     },
    // })
    // .copyDirectory("resources/json", "public/dist/json")
    .copyDirectory("resources/fonts", "public/fonts")
    .copyDirectory("resources/images", "public/images")
    .browserSync({
        proxy: "rubick-laravel.test",
        files: ["resources/**/*.*"],
    });

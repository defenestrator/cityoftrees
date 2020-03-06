const cssImport = require('postcss-import')
const cssNesting = require('postcss-nesting')
const mix = require('laravel-mix')
const purgecss = require('@fullhuman/postcss-purgecss')
require('laravel-mix-tailwind')


mix.webpackConfig({
        resolve: {
            alias: {
                svelte: path.resolve('node_modules', 'svelte')
            },
            extensions: ['.mjs', '.js', '.svelte'],
            mainFields: ['svelte', 'browser', 'module', 'main']
        },
        output: {
            chunkFilename: 'js/[name].js?id=[chunkhash]',
        },
        module: {
            rules: [
                {
                    test: /\.(html|svelte)$/,
                    exclude: /node_modules/,
                    use: 'svelte-loader',
                }
            ]
        }
    })
    .js('./resources/js/app.js', 'public/js')
    .postCss('./resources/css/style.css', 'public/css')
    .tailwind({
        // configPath: '/tailwind.config.js'
    })
    .options({
        postCss: [
            cssImport(),
            cssNesting(),
            ...mix.inProduction() ? [
                purgecss({
                    content: [
                        './resources/**/*.css',
                        './resources/js/**/*.svelte',
                        './resources/views/**/*.blade.php',
                        './resources/views/**/*.html',
                        './resources/views/**/*.svelte',
                    ],
                    defaultExtractor: content =>
                        content.match(/[\w-/:.]+(?<!:)/g) || []
                }),
            ] : [],
        ],
    })
    .version()
    .sourceMaps()

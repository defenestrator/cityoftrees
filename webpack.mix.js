const cssImport = require('postcss-import')
const cssNesting = require('postcss-nesting')
const mix = require('laravel-mix')
require('laravel-mix-purgecss');
require('laravel-mix-tailwind')
require('laravel-mix-svelte');

const purgecss = require('@fullhuman/postcss-purgecss')({

    // Specify the paths to all of the template files in your project
    content: [
      './resources/**/*.html',
      './resources/**/*.svelte',
      './resources/**/*.php',
      './resources/**/*.vue',
      // etc.
    ],

    // Include any special characters you're using in this regular expression
    defaultExtractor: content => content.match(/[\w-/:]+(?<!:)/g) || []
  })

mix.js('./resources/js/app.js', 'public/js')
    .svelte()

    .tailwind({
        configPath: '/tailwind.config.js'
    })
    .postCss('./resources/css/style.css', 'public/css')
    .options({
        postCss: [
            cssImport(),
            cssNesting(),
        ]
    })
    .purgeCss({
        extend: {
            content: [
                path.join(__dirname, 'resources/**/*.svelte')
            ],
        },
        enabled: true
    })
    .version()
    .sourceMaps()

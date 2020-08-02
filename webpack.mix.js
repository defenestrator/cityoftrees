const mix = require('laravel-mix')
require('laravel-mix-tailwind')
require('laravel-mix-svelte')

mix.js('./resources/js/app.js', 'public/js')

    .postCss('./resources/css/style.css', './public/css/style.css', [
        require('postcss-import'),
        require('tailwindcss'),
        ]
    )
    .tailwind({
        configPath: '/tailwind.config.js'
    })

    .svelte()
    .version()
    .sourceMaps()
// Awesome show, great job!

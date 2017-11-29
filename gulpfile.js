
/*
 |--------------------------------------------------------------------------
 | Reed - Gulp task
 |--------------------------------------------------------------------------
 |
 | This gulpfile makes use of Webpack & Hbsfy to precompile modules & templates.
 | GM & Rename are used to resize and copy any Retina assets.
 | BrowserSync is also set up for convenience. Just change the proxy option if needed.
 |
 */

/*-----------------------------------------------------------------------------------*/
            /*  00. REQUIREMENT & OPTIONS
/*-----------------------------------------------------------------------------------*/

const gulp   = require('gulp')
const elixir = require('laravel-elixir')
const gm     = require('gulp-gm')
const rename = require('gulp-rename')


const Task    = elixir.Task
const baseDir = 'styles/ethelach/theme/'


// Options
elixir.config.publicPath = baseDir
elixir.config.imagePath  = ''
elixir.config.assetsPath = 'resources'
elixir.config.sourcemaps = false
elixir.config.css.folder = `${baseDir}`
elixir.config.css.autoprefix.options.browsers = ['ie >= 10', '> 1%']
elixir.config.css.autoprefix.options.remove = false



/*-----------------------------------------------------------------------------------*/
            /*  02. ELIXIR TASK
/*-----------------------------------------------------------------------------------*/

elixir((mix) => {
    mix
        // Compile Sass
        .sass('style.scss', `${baseDir}stylesheet.css`)

        // Bundle app
        .webpack('app.js', `${baseDir}app.min.js`)

        // Sync
        .browserSync({
            files: [
                'styles/ethelach/theme/*',
            ],
            logPrefix: 'Ethelach',
            proxy: 'ethelach.loc',
            notify: false,
            browser: 'chrome',
        })
})




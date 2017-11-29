var webpack = require("webpack");

Elixir.webpack.mergeConfig({
    module: {
        loaders: [
            {
                test: /\.json$/,
                loader: 'json',
            },
            {
                test: /\.hbs/,
                loader: 'handlebars-template-loader',
            },
        ],
    },
    // resolve: {
    //     extensions: ['', '.js'],
    //     alias: {
    //         TweenLite: 'gsap/src/minified/TweenLite.min',
    //     },
    // },
});

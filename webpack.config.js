const path = require('path'),
    miniCssPlugin = require('mini-css-extract-plugin'),
    browserSyncPlugin = require('browser-sync-webpack-plugin');

module.exports = {
    context: __dirname,
    entry: './src/js/index.js',
    output: {
        path: path.resolve(__dirname, 'bundled'),
        filename: 'bundle.js'
    },
    devtool: 'eval-cheap-source-map',
    mode: 'development',
    module: {
        rules: [
            {
                test: /\.js$/,
                exclude: /node_modules/,
                loader: ['babel-loader', 'eslint-loader']
            },
            {
                test: /\.s?css/,
                use: [
                    {
                        loader: miniCssPlugin.loader
                    }, {
                        loader: 'css-loader'
                    },
                    {
                        loader: 'postcss-loader', // Run postcss actions
                        options: {
                            plugins: function () { // postcss plugins, can be exported to postcss.config.js
                                return [
                                    require('autoprefixer')
                                ];
                            }
                        }
                    },
                    {
                        loader: 'sass-loader'
                    }
                ]
            },
            {
                test: /\.(jpg|png|gif)$/,
                loader: 'file-loader',
            }
        ]
    },
    plugins: [
        new miniCssPlugin({
            filename: '[name].css'
        }),
        new browserSyncPlugin({
            files: '**/*.php',
            proxy: 'localhost/wordpress_dev', //change to suit your local dev environment needs
        })
    ]
}

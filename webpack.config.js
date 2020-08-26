const path = require('path'),
    miniCssPlugin = require('mini-css-extract-plugin'),
    bs = require('browser-sync-webpack-plugin');

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
                use: [miniCssPlugin.loader, 'css-loader', 'sass-loader']
            }
        ]
    },
    plugins: [
        new miniCssPlugin({
            filename: '[name].css'
        }),
        new bs({
            files: '**/*.php',
            proxy: 'localhost/wordpress_dev',
        })
    ]
}

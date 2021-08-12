const MiniCssExtractPlugin = require('mini-css-extract-plugin');
const path = require('path');
const VueLoaderPlugin = require('vue-loader/lib/plugin');
const BrowserSyncPlugin = require('browser-sync-webpack-plugin');

module.exports = {
    mode: "development",
    entry: "./resources/js/app.js",
    output: {
        filename: "js/app.js",
        path: path.join(__dirname, "public")
    },
    module: {
        rules: [
            {
                test: /\.js$/,
                loader: "babel-loader",
                options: {
                    presets: [
                        "vue", "@babel/preset-env",
                    ],
                },
            },
            {
                test: /\.vue$/,
                loader: 'vue-loader'
            },
            {
                test : /\.scss$/i,
                use : [
                    {
                        loader : MiniCssExtractPlugin.loader,
                        options :{
                            publicPath : path.join(__dirname,"public/css")
                        },
                    },
                    "css-loader",
                    "sass-loader",
                ],
            },
            {
                test : /\.scss/,
                loader : 'import-glob-loader'
            }
        ]
    },
    resolve: {
        modules: [path.join(__dirname, '/resources/'), 'node_modules'],
        extensions: ['.js', '.vue'],
        alias:{
            'vue$': 'vue/dist/vue.esm.js',
        }
    },
    plugins: [
        new MiniCssExtractPlugin({
            filename : "css/style.css"
        }),
        new VueLoaderPlugin(),
        new BrowserSyncPlugin({
            host: '127.0.0.1',
            port: 8000,
            proxy: "http://127.0.0.1:9999"
        })
    ],
}
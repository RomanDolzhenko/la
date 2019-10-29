const path = require('path');
const MiniCssExtractPlugin = require('mini-css-extract-plugin');
const VueLoaderPlugin = require('vue-loader/lib/plugin');
const ExtractCssAssetsPlugin = require('extract-css-assets-webpack-plugin');
const TerserPlugin = require('terser-webpack-plugin');
const OptimizeCssAssetsPlugin = require('optimize-css-assets-webpack-plugin');
const { CleanWebpackPlugin } = require('clean-webpack-plugin');

module.exports = {
    mode: 'production',
    devtool: 'eval',
    entry: {
        // frontend: path.resolve(__dirname, './node_modules/admin-lte/dist/js', 'frontend.js'),
        backend: path.resolve(__dirname, './node_modules/admin-lte/dist/js', 'adminlte.js')
    },
    output: {
        path: path.resolve(__dirname, './public/theme'),
        filename: '[name].js'
    },
    stats: {
        assets: true,
        modules: false,
        children: false,
        warnings: false,
    },
    plugins: [
        new MiniCssExtractPlugin({
            filename: '[name].css'
        }),
        new VueLoaderPlugin(),
        new ExtractCssAssetsPlugin({
            outputPath: 'assets/',
            relativeCssPath: '../'
        }),
        new OptimizeCssAssetsPlugin({
            cssProcessorPluginOptions: {
                preset: ['default', {
                    discardComments: {
                        removeAll: true
                    }
                }]
            }
        }),
        new CleanWebpackPlugin()
    ],
    optimization: {
        minimize: true,
        minimizer: [
            new TerserPlugin({
                cache: true,
                parallel: true,
                terserOptions: {
                    output: {
                        comments: false
                    }
                }
            })
        ]
    },
    module: {
        rules: [{
            test: /\.(scss|css)$/,
            use: [
                MiniCssExtractPlugin.loader,
                'css-loader',
                'sass-loader'
            ]
        }, {
            test: /\.vue$/,
            use: [{
                loader: 'vue-loader',
                options: {
                    loaders: {
                        css: 'vue-style-loader!css-loader',
                        scss: 'vue-style-loader!css-loader!sass-loader'
                    }
                }
            }]
        }, {
            test: /\.(png|jpg|gif|ttf|woff|svg|eot|woff2)$/,
            use: [{
                loader: 'url-loader',
                options: {
                    limit: false,
                    name: 'assets/[hash].[ext]'
                }
            }]
        }]
    },
    watchOptions: {
        ignored: './node_modules/'
    }
};

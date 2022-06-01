const path = require('path');
const TsconfigPathsPlugin = require('tsconfig-paths-webpack-plugin');
// const TerserPlugin = require("terser-webpack-plugin");

module.exports = {
    entry: './assets/js/theme',
    mode: "development",
    watch: true,
    watchOptions: {
        poll: true,
        ignored: /node_modules/
    },
    module: {
        rules: [
            {
                test: /\.tsx?$/,
                use: 'ts-loader',
                exclude: /node_modules/,
            },
            {
                test: /\.css$/i,
                use: ["style-loader", "css-loader"],
            },
        ],
    },
    resolve: {
        extensions: ['.tsx', '.ts', '.js', '.json'],
        alias: {
            'utils': path.resolve(__dirname, './assets/js/helpers')  // <-- When you build or restart dev-server, you'll get an error if the path to your utils.js file is incorrect.
        },
        plugins: [
            new TsconfigPathsPlugin({
                configFile: './assets/js/tsconfig.json',
                // baseUrl: path.resolve(__dirname, './assets/js'),
            }),
        ]
    },
    // optimization: {
    //     minimize: true,
    //     minimizer: [new TerserPlugin()],
    //   },
    output: {
        filename: 'theme.js',
        path: path.resolve(__dirname, './assets/compiled'),
    },
};
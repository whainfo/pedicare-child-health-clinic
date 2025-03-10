const path = require('path');

let conf = {
    entry: './src/main.js',
    stats: { warnings: false }, // Hide warnings
    output: {
        path: path.resolve(__dirname, './dist'),
        filename: 'main.js', // Remove '.min' to not minify the JS file
        publicPath: 'dist/'
    },
    module: {
        rules: [
            {
                test: /\.js$/,
                use: [{
                    loader: 'babel-loader'
                }]
            },
            {
                test: /\.(sa|sc|c)ss$/,
                use: [
                    'style-loader', // Combine CSS into a <style> tag
                    'css-loader?url=false',
                    'sass-loader?url=false',
                ]
            }
        ]
    },
    plugins: [],
};

module.exports = (env, options) => {
    return conf;
};
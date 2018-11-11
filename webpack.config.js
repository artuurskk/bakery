const path = require('path');
const HtmlWebpackPlugin = require('html-webpack-plugin');
const MiniCssExtractPlugin = require("mini-css-extract-plugin");

module.exports = {
  entry: { main: './src/index.js' },
  output: {
    path: path.resolve(__dirname, 'dist'),
    filename: '[name].[chunkhash].js'
  },
  module: {
    rules: [
      {
        test: /\.js$/,
        exclude: /node_modules/,
        use: {
          loader: "babel-loader"
        }
      },
       {
            test: /\.html$/,
            use: [
                {
                    loader: "html-loader",
                    options: { minimize: true }
                }
            ]
       },
	  {
        test: /\.scss$/,
        use:  [  'style-loader', MiniCssExtractPlugin.loader, 'css-loader', 'postcss-loader', 'sass-loader']
      },
     {
       test: /\.(png|jpg|gif)$/,
       use: [
         {
          loader: "file-loader"
        }
       ]
     },
	{
       test: /\.(woff(2)?|ttf|eot|svg)(\?v=\d+\.\d+\.\d+)?$/,
       use: [{
          loader: 'file-loader',
          options: {
            name: '[name].[ext]',
            outputPath: 'fonts/'
        }
        }]
    }
    ]
  },
  plugins: [
      new HtmlWebpackPlugin({
          inject: false,
          hash: true,
          template: "./src/index.html",
          filename: "./index.html"
      }),
      new MiniCssExtractPlugin({
      filename: 'style.css'
    })
  ]
};
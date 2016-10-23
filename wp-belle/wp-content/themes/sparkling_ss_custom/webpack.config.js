var path = require('path');
var neat = require('node-neat');

var ROOT = path.join(__dirname, '.');

var sassLoaderPaths = neat.with(path.join(ROOT, './assets/scss')).map(function(item) {
  return '&includePaths[]=' + item;
});

module.exports = {
  context: ROOT,
  entry: './assets/js/app.js',
  output: {
    path: './assets/js',
    filename: './dist.js',
  },
  resolve: {
    root: [
      path.join(ROOT, './assets/js'),
      path.join(ROOT, './assets/scss'),
    ],
    extensions: ['', '.js', '.jsx', '.scss'],
  },
  module: {
    loaders: [
      { test: /\.jsx?$/, exclude: [/node_modules/], loader: 'babel-loader' },
      {
        test: /\.scss$/,
        loader: 'style!css!sass?outputStyle=expanded' + sassLoaderPaths
      },
    ]
  }
};

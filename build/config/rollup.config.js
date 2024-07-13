'use strict'

const { babel } = require('@rollup/plugin-babel')


module.exports = {
  input: 'build/js/AdminLTE.js',
  output: {
    banner,
    file: 'dist/js/adminlte.js',
    format: 'umd',
    globals: {
      jquery: 'jQuery'
    },
    name: 'adminlte'
  },
  external: ['jquery'],
  plugins: [
    babel({
      exclude: 'node_modules/**',
      // Include the helpers in the bundle, at most one copy of each
      babelHelpers: 'bundled'
    })
  ]
}

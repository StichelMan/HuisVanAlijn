module.exports = {
  presets: ['@babel/preset-react', ['@babel/preset-env', { targets: { node: 'current' } }]],
  plugins: ['@babel/plugin-transform-runtime', '@babel/plugin-transform-modules-commonjs', 'babel-plugin-transform-import-meta'],
}
const { defineConfig } = require('@vue/cli-service')
module.exports = defineConfig({
  devServer: {
    server: 'http',
  },
  transpileDependencies: true
})
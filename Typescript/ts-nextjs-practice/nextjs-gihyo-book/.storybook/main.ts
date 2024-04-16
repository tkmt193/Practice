import type { StorybookConfig } from '@storybook/nextjs';
const TsconfigPathsPlugin = require('tsconfig-paths-webpack-plugin');
const path = require('path');
const config: StorybookConfig = {
  stories: ['../src/**/*.mdx', '../src/**/*.stories.@(js|jsx|ts|tsx)'],
  addons: [
    '@storybook/addon-actions',
    '@storybook/addon-links',
    '@storybook/addon-essentials',
    '@storybook/addon-postcss',
    "@storybook/preset-create-react-app",
    '@storybook/addon-interactions',
  ],
  framework: {
    name: '@storybook/nextjs',
    options: {},
  },
  docs: {
    autodocs: 'tag',
  },
  staticDirs: ['public'],
  babel: async (options) => ({
    ...options,
    plugins: [
      '@babel/plugin-proposal-class-properties',
      '@babel/plugin-proposal-private-methods',
      '@babel/plugin-proposal-privste-property-in-object',
    ],
    presets: [
      "@babel/preset-env",
      "@babel/preset-react"
    ],
}),
webpackFinal: async (config) => {
  config.resolve!.plugins= [
    new TsconfigPathsPlugin({
      configFile: path.resolve(__dirname, '../tsconfig.json')
    })
  ];
  return config;
},
}
export default config
const path = require('path');

module.exports = {
    resolve: {
        alias: {
            '@': path.resolve('resources/js'),
        },
    },
    module: {
		rules: [
			{
				test: /\.pug$/,
				// loader: 'pug-plain-loader',
                oneOf: [
                    // this applies to `<template lang="pug">` in Vue components
                    {
                      resourceQuery: /^\?vue/,
                      use: ['pug-plain-loader']
                    },
                  ]
			}
		]
	}
};

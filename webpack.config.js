const Encore = require('@symfony/webpack-encore');

if (!Encore.isRuntimeEnvironmentConfigured()) {
    Encore.configureRuntimeEnvironment(process.env.NODE_ENV || 'dev');
}

Encore
    .setOutputPath('./public/')
    .setPublicPath(Encore.isDevServer() ? '/public/' : '/bundles/contaoaccessibility/')
    .setManifestKeyPrefix('')

    .cleanupOutputBeforeBuild()
    .disableSingleRuntimeChunk()
    .enableBuildNotifications()

    .addEntry('navigation', './assets/accessibility/navigation.js')

    .enableSassLoader()
    .enablePostCssLoader((options) => {
        options.postcssOptions = {
            plugins: {
                'postcss-preset-env': {
                    stage: 2,
                }
            }
        };
    })

    .enableVersioning(Encore.isProduction())

    .configureDevServerOptions((options) => Object.assign({}, options, {
        static: false,
        hot: true,
        liveReload: true,
        allowedHosts: 'all',
        watchFiles: ['assets/*', 'contao/**/*', 'src/**/*', 'translations/**/*'],
        client: {
            overlay: false
        }
    }));

module.exports = Encore.getWebpackConfig();

var Encore = require('@symfony/webpack-encore');

Encore
    .setOutputPath('web/build/')
    .setPublicPath('/web')

    // will output as web/build/main.css
    .addEntry('main', './assets/scss/main.scss')

    .addEntry('dashboard', './assets/scss/dashboard.scss')

    .cleanupOutputBeforeBuild()
    .enableBuildNotifications()
    .enableSassLoader()
    .enableSassLoader(function(sassOptions) {}, {
        resolveUrlLoader: false
    })
    .autoProvidejQuery();

module.exports = Encore.getWebpackConfig();

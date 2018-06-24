var Encore = require('@symfony/webpack-encore');

Encore
    .setOutputPath('web/build/')
    .setPublicPath('/web')

    // Crée son jumeau sous ce lien : css/web/build/main.css
    .addEntry('css/main', './assets/scss/main.scss')

    .addEntry('css/dashboard', './assets/scss/dashboard.scss')

    .cleanupOutputBeforeBuild()
    .enableBuildNotifications()
    .enableSassLoader()
    .enableSassLoader(function(sassOptions) {}, {
        resolveUrlLoader: false
    })
    .autoProvidejQuery();

module.exports = Encore.getWebpackConfig();

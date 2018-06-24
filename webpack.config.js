var Encore = require('@symfony/webpack-encore');

Encore
    .setOutputPath('web/build/')
    .setPublicPath('/web')

    .addEntry('js/app', './assets/js/app.js')

    .addEntry('dashboard', './assets/scss/dashboard.scss')

    // Transfert des css dans build/css (il faudra ajuster les liens pour dashboard.css et supprimer celui ci-dessus
    .addEntry('css/main', './assets/scss/main.scss')
    .addEntry('css/dashboard', './assets/scss/dashboard.scss')
    .addEntry('css/accueil', './assets/scss/accueil.scss')


    // Transfert des images dans build/images
    .addEntry('images/FACEBOOK_LOGO', './assets/images/FACEBOOK_LOGO.png')
    .addEntry('images/FOND', './assets/images/FOND.png')
    .addEntry('images/INSTAGRAM_LOGO', './assets/images/INSTAGRAM_LOGO.png')
    .addEntry('images/LOGO_QUINO', './assets/images/LOGO_QUINO.png')
    .addEntry('images/LOGO_QUINO2', './assets/images/LOGO_QUINO2.png')
    .addEntry('images/LOGO_QUINO3', './assets/images/LOGO_QUINO3.png')
    .addEntry('images/ORNEMENT_LOGO', './assets/images/ORNEMENT_LOGO.png')
    .addEntry('images/TIMBRE_LOGO_QUINO', './assets/images/TIMBRE_LOGO_QUINO.png')


    .cleanupOutputBeforeBuild()
    .enableBuildNotifications()


    .enableSassLoader(function(sassOptions) {}, {
        resolveUrlLoader: false
    })

    .autoProvidejQuery();

module.exports = Encore.getWebpackConfig();

var Encore = require('@symfony/webpack-encore');

Encore

    // Là où les fichiers sont générés
    .setOutputPath('web/build/')
    // racine du projet
    .setPublicPath('../')
    // Les ressources liées dans les fichiers générés (comme l'URL des polices dans les fichiers CSS, les glyphicons) sont relatives.
    .setManifestKeyPrefix('build/')



    .addEntry('login', './assets/scss/login.scss')
    .addEntry('dashboard', './assets/scss/dashboard.scss')


    // Transfert des css dans build/css (il faudra ajuster les liens pour dashboard.css et supprimer celui ci-dessus.
    .addEntry('css/main', './assets/scss/main.scss')
    .addEntry('css/dashboard', './assets/scss/dashboard.scss')
    .addEntry('css/accueil', './assets/scss/accueil.scss')
    .addEntry('css/carte', './assets/scss/carte.scss')


    // Transfert des images dans build/images.
    .addEntry('images/FACEBOOK_LOGO', './assets/images/FACEBOOK_LOGO.png')
    .addEntry('images/FOND', './assets/images/FOND.png')
    .addEntry('images/INSTAGRAM_LOGO', './assets/images/INSTAGRAM_LOGO.png')
    .addEntry('images/LOGO_QUINO', './assets/images/LOGO_QUINO.png')
    .addEntry('images/LOGO_QUINO2', './assets/images/LOGO_QUINO2.png')
    .addEntry('images/LOGO_QUINO3', './assets/images/LOGO_QUINO3.png')
    .addEntry('images/ORNEMENT_LOGO', './assets/images/ORNEMENT_LOGO.png')
    .addEntry('images/TIMBRE_LOGO_QUINO', './assets/images/TIMBRE_LOGO_QUINO.png')
    .addEntry('images/PERROQUET', './assets/images/PERROQUET.png')


    .addEntry('js/app', './assets/js/app.js')


    // Transfet les modules jquery et jQuery UI dans 'jquery_jqueryUi.js' fichier.
    .createSharedEntry('jquery_jqueryUi', ['jquery', 'jquery-ui'])


    .cleanupOutputBeforeBuild()
    .enableBuildNotifications()


    .enableSassLoader(function(sassOptions) {}, {
        resolveUrlLoader: false
    })

    .autoProvidejQuery();


module.exports = Encore.getWebpackConfig();

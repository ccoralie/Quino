// require jQuery
const $ = require('jquery');
require('jquery-ui');

// create global $ and jQuery variables
global.$ = global.jQuery = $;

require('bootstrap-sass');

$(document).ready(function () {
    console.log("ok, JQuery fonctionne !");
});

console.log('Bienvenue sur WebPack!');

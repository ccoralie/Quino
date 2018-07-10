var map;
var initialize;

initialize = function () {
    // Correspond au coordonnées du QUINO.
    var latLng = new google.maps.LatLng(48.5815618, 7.75703980000003);

    //define the basic color of your map, plus a value for saturation and brightness
    var	main_color = '#4a9271',
        brightness_value= 10;

    //we define here the style of the map
    var styles= [
        {
            //set saturation for the labels on the map
            elementType: "labels",
            stylers: [
                {saturation: -10}
            ]
        },
        {	//poi stands for point of interest - don't show these lables on the map
            featureType: "poi",
            elementType: "labels",
            stylers: [
                {visibility: "off"}
            ]
        },
        {
            //don't show highways lables on the map
            featureType: 'road.highway',
            elementType: 'labels',
            stylers: [
                {visibility: "off"}
            ]
        },
        {
            //don't show local road lables on the map
            featureType: "road.local",
            elementType: "labels.icon",
            stylers: [
                {visibility: "off"}
            ]
        },
        {
            //don't show arterial road lables on the map
            featureType: "road.arterial",
            elementType: "labels.icon",
            stylers: [
                {visibility: "off"}
            ]
        },
        {
            //don't show road lables on the map
            featureType: "road",
            elementType: "geometry.stroke",
            stylers: [
                {visibility: "off"}
            ]
        },
        //style different elements on the map
        {
            featureType: "transit",
            elementType: "geometry.fill",
            stylers: [
                { hue: main_color },
                { visibility: "on" },
                { lightness: brightness_value },
                { saturation: -10 }
            ]
        },
        {
            featureType: "poi",
            elementType: "geometry.fill",
            stylers: [
                { hue: main_color },
                { visibility: "on" },
                { lightness: brightness_value },
                { saturation: -10 }
            ]
        },
        {
            featureType: "poi.government",
            elementType: "geometry.fill",
            stylers: [
                { hue: main_color },
                { visibility: "on" },
                { lightness: brightness_value },
                { saturation: -10 }
            ]
        },
        {
            featureType: "poi.business",
            elementType: "geometry.fill",
            stylers: [
                { hue: main_color },
                { visibility: "on" },
                { lightness: brightness_value },
                { saturation: -10 }
            ]
        },
        {
            featureType: "transit",
            elementType: "geometry.fill",
            stylers: [
                { hue: main_color },
                { visibility: "on" },
                { lightness: brightness_value },
                { saturation: -10}
            ]
        },
        {
            featureType: "transit.station",
            elementType: "geometry.fill",
            stylers: [
                { hue: main_color },
                { visibility: "on" },
                { lightness: brightness_value },
                { saturation: -10 }
            ]
        },
        {
            featureType: "landscape",
            stylers: [
                { hue: main_color },
                { visibility: "on" },
                { lightness: brightness_value },
                { saturation: -10 }
            ]

        },
        {
            featureType: "road",
            elementType: "geometry.fill",
            stylers: [
                { hue: main_color },
                { visibility: "on" },
                { lightness: brightness_value },
                { saturation: -10 }
            ]
        },
        {
            featureType: "road.highway",
            elementType: "geometry.fill",
            stylers: [
                { hue: main_color },
                { visibility: "on" },
                { lightness: brightness_value },
                { saturation: -10 }
            ]
        },
        {
            featureType: "water",
            elementType: "geometry",
            stylers: [
                { hue: main_color },
                { visibility: "on" },
                { lightness: -10 },
                { saturation: -80 }
            ]
        }
    ];

    var myOptions = {
        zoom: 14,
        center: latLng,
        mapTypeId: google.maps.MapTypeId.TERRAIN, // Type de carte, différentes valeurs possible HYBRID, ROADMAP, SATELLITE, TERRAIN
        maxZoom: 20,
        styles: styles
    };

    // Configuration de l'icône personnalisée
    var COCO = {
        // Adresse de l'icône personnalisée
        url: "/build/images/COCO_QUINO.29901791.png",
        scaledSize: new google.maps.Size(80, 100),
    };

    // On défini le lieu cible
    map = new google.maps.Map(document.getElementById('map'), myOptions);


    var marker = new google.maps.Marker({
        position: latLng,
        map: map,
        title: "QUINO",
        icon: COCO,
        shadow: COCO,
    });

    // On défini la bulle de texte.
    var contentMarker = 'Suspendisse quis magna dapibus orci porta varius sed sit amet purus. Ut eu justo dictum elit malesuada facilisis. Proin ipsum ligula, feugiat sed faucibus a, sit amet mauris.'

    var infoWindow = new google.maps.InfoWindow({
        content: contentMarker,
        position: latLng
    });

    // On défini quand la bulle de texte est activée.
    google.maps.event.addListener(marker, 'click', function () {
        infoWindow.open(map, marker);
    });

};

initialize();
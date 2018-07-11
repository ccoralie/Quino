var map;
var initialize;

initialize = function () {
    // Correspond au coordonnées du QUINO.
    var latLng = new google.maps.LatLng(48.5815618, 7.75703980000003);

    // Je défini mes variables couleur et autres...
    var	main_color = '#4a9271',
        brightness_value= 10;

    // Je personalise ma carte
    var styles= [
        {
            //set saturation for the labels on the map
            elementType: "labels",
            stylers: [
                {saturation: -10}
            ]
        },
        {	//poi = point of interest = Lieux touristiques, espaces verts...
            featureType: "poi",
            elementType: "labels",
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
        //style different elements on the map
        {
            featureType: "poi", //verdure
            elementType: "geometry.fill",
            stylers: [
                { hue: main_color },
                { visibility: "on" },
                { lightness: brightness_value },
                { saturation: -40 }
            ]
        },
        {
            featureType: "landscape",
            stylers: [
                { visibility: "on" },
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
        zoom: 15,
        center: latLng,
        mapTypeId: google.maps.MapTypeId.TERRAIN, // Type de carte, différentes valeurs possible HYBRID, ROADMAP, SATELLITE, TERRAIN
        maxZoom: 20,
        styles: styles
    };

    // Je configure Coco_Quino Lama personnalisée
    var COCO = {
        // Adresse de l'icône personnalisée
        url: "/build/images/COCO_QUINO.58b69662.png",
        scaledSize: new google.maps.Size(70, 105),
    };

    // Je défini le lieu cible
    map = new google.maps.Map(document.getElementById('map'), myOptions);


    var marker = new google.maps.Marker({
        position: latLng,
        map: map,
        title: "QUINO",
        icon: COCO,
        animation:google.maps.Animation.BOUNCE,

    });

    // Je défini la bulle de texte.
    var contentMarker = '<p style="color:black;">14 rue Munch !</p>'

    var infoWindow = new google.maps.InfoWindow({
        content: contentMarker,
        position: latLng
    });

    // Je défini quand la bulle de texte est activée.
    google.maps.event.addListener(marker, 'click', function () {
        infoWindow.open(map, marker);
    });

};

initialize();
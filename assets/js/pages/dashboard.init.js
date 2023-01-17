/*
Template Name: Minia - Admin & Dashboard Template
Author: Themesbrand
Website: https://themesbrand.com/
Contact: themesbrand@gmail.com
File: Dashboard Init Js File
*/

// get colors array from the string
function getChartColorsArray(chartId) {
    var colors = $(chartId).attr('data-colors');
    var colors = JSON.parse(colors);
    return colors.map(function(value){
        var newValue = value.replace(' ', '');
        if(newValue.indexOf('--') != -1) {
            var color = getComputedStyle(document.documentElement).getPropertyValue(newValue);
            if(color) return color;
        } else {
            return newValue;
        }
    })
}







// MAp

var vectormapColors = getChartColorsArray("#sales-by-locations");
$('#sales-by-locations').vectorMap({
    map: 'world_mill_en',
    normalizeFunction: 'polynomial',
    hoverOpacity: 0.7,
    hoverColor: false,
    regionStyle: {
        initial: {
            fill: '#e9e9ef'
        }
    },
    markerStyle: {
        initial: {
            r: 9,
            'fill': vectormapColors,
            'fill-opacity': 0.9,
            'stroke': '#fff',
            'stroke-width': 7,
            'stroke-opacity': 0.4
        },

        hover: {
            'stroke': '#fff',
            'fill-opacity': 1,
            'stroke-width': 1.5
        }
    },
    backgroundColor: 'transparent',
    markers: [{
        latLng: [-7.1916029031188, 112.64860510826],
        name: 'Divisi Industri Komponen dan Permesinan'
    }, {
        latLng: [-6.856215, 109.138330],
        name: 'Divisi Sumber Daya Air'
    }, {
        latLng: [-6.007224540603342, 106.02008879184724],
        name: 'Pabrik Komponen Turbin'
    }]
});


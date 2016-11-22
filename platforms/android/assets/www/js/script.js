$(document).ready(function() {
    $('#datetimepicker12').datetimepicker({
        inline: true,
        dayViewHeaderFormat: 'MMMM',
        format: 'DD/MM/YYYY',
    });
// dropdown
    $('.dropdown-toggle').dropdown();
    

    // Timer
    $('.timer').timer({
        editable: true,
        format: '%H:%M:%S'
    });
    $('.time_in .resume_timer').addClass('hidden');
    // Init timer start
    $('.pause_timer').on('click', function() {
        $(this).addClass('hidden');
        $('.pause_timer').removeClass('hidden');
        $('#pause_name').html("Pause");
    });

    // Init timer resume
    $('.time_in .resume_timer').on('click', function() {
        $('.timer').timer('resume');
        $(this).addClass('hidden');
        $('.time_in .pause_timer').removeClass('hidden');
        $('#pause_name').html("Pause");
    });


    // Init timer pause
    $('.time_in .pause_timer').on('click', function() {
        $('.timer').timer('pause');
        $(this).addClass('hidden');
        $('.time_in .resume_timer').removeClass('hidden');
        $('#pause_name').html("Start Pause");
    });

}); // Document ready

// Google Maps
// navigator.geolocation.getCurrentPosition(onSuccess, onError, { timeout: 30000 });

// function onSuccess(position) {
//     var lat = position.coords.latitude;
//     var lang = position.coords.longitude;
//     // //Google Maps
//     var myLatlng = new google.maps.LatLng(lat, lang);
//     var mapOptions = { zoom: 9, center: myLatlng }
//     var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
//     var marker = new google.maps.Marker({ position: myLatlng, map: map });


// }/*on succces*/

// function onError(error) {
//     alert('code: ' + error.code + '\n' +
//         'message: ' + error.message + '\n');
// }
if ($('#map_canvas_show').length) {
    var locations = [
        ['Hr employee', 46.7820497, 23.6130128, 5],
        ['Hr employee4', 46.7817847, 23.6121312, 4],
        ['Hr employee3', 46.7650765, 23.5803646, 3],
        ['Hr employee2', 46.7817845, 23.61213112, 2],
        ['Hr employee1', 46.781784, 23.61213113, 1],
    ];
    var map = new google.maps.Map(document.getElementById('map_canvas'), {
        zoom: 12,
        center: new google.maps.LatLng(46.7820497, 23.6130128),
        mapTypeId: google.maps.MapTypeId.ROADMAP
    });

    var image = 'img/icon-map.png';
    var infowindow = new google.maps.InfoWindow();

    var marker, i;

    for (i = 0; i < locations.length; i++) {
        marker = new google.maps.Marker({
            position: new google.maps.LatLng(locations[i][1], locations[i][2]),
            map: map,
            icon: image
        });

        google.maps.event.addListener(marker, 'click', (function(marker, i) {
            return function() {
                infowindow.setContent(locations[i][0]);
                infowindow.open(map, marker);
            }
        })(marker, i));
    }
};
if ($('#map_history').length) {
    function initMap() {
        var pointA = new google.maps.LatLng(46.7820497, 23.6130128),
            pointB = new google.maps.LatLng(46.7920497, 23.6230128),
            myOptions = {
                zoom: 13,
                center: pointA
            },
            map = new google.maps.Map(document.getElementById('map_canvas'), myOptions),
            // Instantiate a directions service.
            directionsService = new google.maps.DirectionsService,
            directionsDisplay = new google.maps.DirectionsRenderer({
                map: map
            })

        // get route from A to B
        calculateAndDisplayRoute(directionsService, directionsDisplay, pointA, pointB);

    }



    function calculateAndDisplayRoute(directionsService, directionsDisplay, pointA, pointB) {
        directionsService.route({
            origin: pointA,
            destination: pointB,
            avoidTolls: true,
            avoidHighways: false,
            travelMode: google.maps.TravelMode.DRIVING
        }, function(response, status) {
            if (status == google.maps.DirectionsStatus.OK) {
                directionsDisplay.setDirections(response);
            } else {
                window.alert('Directions request failed due to ' + status);
            }
        });
    }

    initMap();
}
// onSuccess Callback 
// This method accepts a Position object, which contains the 
// current GPS coordinates 
// 
// var onSuccess = function(position) {
//     console.log('Latitude: '          + position.coords.latitude          + '\n' +
//           'Longitude: '         + position.coords.longitude         + '\n');
// };

// // onError Callback receives a PositionError object 
// // 
// function onError(error) {
//     console.log('code: '    + error.code    + '\n' +
//           'message: ' + error.message + '\n');
// }

// navigator.geolocation.getCurrentPosition(onSuccess, onError);


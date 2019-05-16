<?php
 $isUK = strpos($_SERVER['REQUEST_URI'],  'UK' );
 $cookiesMessage = $isUK
	 ? "We use cookies to offer you a better experience in our website. If you continue to use it,
        we will consider that you accept the use of cookies."
	 : "Nous utilisons des cookies pour vous offrir une meilleure expérience sur notre site.
	Si vous continuez à utiliser ce dernier, nous considérerons que vous acceptez l'utilisation des cookies.";

?>

<!--Scripts Google Maps-->
<script>
    "use strict";

    function initMap() {
        const dep1 = {lat: 44.664845, lng: -1.168768};
        const dep2 = {lat: 44.697794, lng: -1.228092};
        const dep3 = {lat: 44.656387, lng: -1.236843};
        const dep4 = {lat: 44.641716, lng: -1.204502};
        const dep5 = {lat: 44.660816, lng: -1.151793};
        const map = new google.maps.Map(document.getElementById('map1-7'), {
            zoom: 12,
            center: dep1,
            styles: [
                {
                    "featureType": "administrative",
                    "elementType": "labels.text.fill",
                    "stylers": [
                        {
                            "color": "#444444"
                        }
                    ]
                },
                {
                    "featureType": "landscape",
                    "elementType": "all",
                    "stylers": [
                        {
                            "color": "#f2f2f2"
                        }
                    ]
                },
                {
                    "featureType": "poi",
                    "elementType": "all",
                    "stylers": [
                        {
                            "visibility": "off"
                        }
                    ]
                },
                {
                    "featureType": "road",
                    "elementType": "all",
                    "stylers": [
                        {
                            "saturation": -100
                        },
                        {
                            "lightness": 45
                        }
                    ]
                },
                {
                    "featureType": "road.highway",
                    "elementType": "all",
                    "stylers": [
                        {
                            "visibility": "simplified"
                        }
                    ]
                },
                {
                    "featureType": "road.arterial",
                    "elementType": "labels.icon",
                    "stylers": [
                        {
                            "visibility": "off"
                        }
                    ]
                },
                {
                    "featureType": "transit",
                    "elementType": "all",
                    "stylers": [
                        {
                            "visibility": "off"
                        }
                    ]
                },
                {
                    "featureType": "water",
                    "elementType": "all",
                    "stylers": [
                        {
                            "color": "#0efafa"
                        },
                        {
                            "visibility": "on"
                        }
                    ]
                }
            ]
        });
        const marker1 = new google.maps.Marker({
            position: dep1,
            map: map,
            title: 'JETÉE THIERS'
        });
        const marker2 = new google.maps.Marker({
            position: dep2,
            map: map,
            title: 'JETÉE DU CANON'
        });
        const marker3 = new google.maps.Marker({
            position: dep3,
            map: map,
            title: 'JETÉE BÉLISAIRE'
        });
        const marker4 = new google.maps.Marker({
            position: dep4,
            map: map,
            title: 'JETÉE MOULLEAU'
        });
        const marker5 = new google.maps.Marker({
            position: dep5,
            map: map,
            title: 'PETIT PORT D\'ARCACHON'
        });
    }
</script>
<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCkV5zRBtU8-IkexDgaOnBmLFDucxEJRLk&callback=initMap">
</script>
<!--END Scripts Google Maps-->

<script type="text/javascript" src="https://unpkg.com/jquery@3.2.1/dist/jquery.js"></script>
<script src="./../../assets/libraries/popper/popper.min.js"></script>
<script src="./../../assets/libraries/tether/tether.min.js"></script>
<script src="./../../assets/libraries/bootstrap/js/bootstrap.min.js"></script>
<script src="./../../assets/libraries/smoothscroll/smooth-scroll.js"></script>
<script src="./../../assets/libraries/cookies-alert-plugin/cookies-alert-core.js"></script>
<script src="./../../assets/libraries/cookies-alert-plugin/cookies-alert-script.js"></script>
<script src="./../../assets/libraries/dropdown/js/script.min.js"></script>
<script src="./../../assets/libraries/viewportchecker/jquery.viewportchecker.js"></script>
<script src="./../../assets/libraries/parallax/jarallax.min.js"></script>
<script src="./../../assets/libraries/sociallikes/social-likes.js"></script>
<script src="./../../assets/libraries/touchswipe/jquery.touch-swipe.min.js"></script>
<script src="./../../assets/js/index.js"></script>
<script src="./../../assets/libraries/theme/js/script.js"></script>

<!-- Contact Form JavaScript -->
<script src="./../../assets/js/jqBootstrapValidation.js"></script>
<script src="./../../assets/js/contact_me.js"></script>

<input name="animation" type="hidden">
<input name="cookieData" type="hidden"
       data-cookie-text="<?php echo $cookiesMessage ?>"
>

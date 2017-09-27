(function ($) {
			// map button toggle
			//AIzaSyABW6QvY6H0pV9pyFTde6M59h2btjM2uZE
			$( ".gmap-btn" ).click(function(){
				$( "#map-btn1" ).toggleClass( "btn-show", "btn-hide", 1000 );
				$( "#map-btn1" ).toggleClass( "btn-hide", "btn-show", 1000 );
				$( "#map-btn2" ).toggleClass( "btn-hide", "btn-show", 1000 );
				$( "#map-btn2" ).toggleClass( "btn-show", "btn-hide", 1000 );
				$( "#map-btn2" ).toggleClass( "close-map-button", "open-map-button", 1000 );
				$( "#map-btn2" ).toggleClass( "open-map-button", "close-map-button", 1000 );
				$( "#map" ).toggleClass( "close-map", "open-map", 1000 );
				$( "#map" ).toggleClass( "open-map", "close-map", 1000 );
				return false;
			});

			var folsom = new google.maps.LatLng(19.3953061, -99.172734);
			var markerposition = new google.maps.LatLng(19.3953061, -99.172734);

			var marker;
			var map;

			function initialize() {
			  var mapOptions = {
				zoom: 15,
				center: folsom,
				scrollwheel: false,
                // This is where you would paste any style found on Snazzy Maps.
				//styles: [{featureType:"landscape",stylers:[{saturation:-100},{lightness:65},{visibility:"on"}]},{featureType:"poi",stylers:[{saturation:-100},{lightness:51},{visibility:"simplified"}]},{featureType:"road.highway",stylers:[{saturation:-100},{visibility:"simplified"}]},{featureType:"road.arterial",stylers:[{saturation:-100},{lightness:30},{visibility:"on"}]},{featureType:"road.local",stylers:[{saturation:-100},{lightness:40},{visibility:"on"}]},{featureType:"transit",stylers:[{saturation:-100},{visibility:"simplified"}]},{featureType:"administrative.province",stylers:[{visibility:"off"}]/**/},{featureType:"administrative.locality",stylers:[{visibility:"off"}]},{featureType:"administrative.neighborhood",stylers:[{visibility:"on"}]/**/},{featureType:"water",elementType:"labels",stylers:[{visibility:"on"},{lightness:-25},{saturation:-100}]},{featureType:"water",elementType:"geometry",stylers:[{hue:"#ffff00"},{lightness:-25},{saturation:-97}]}]
				styles: [
            {elementType: 'geometry', stylers: [{color: '#242f3e'}]},
            {elementType: 'labels.text.stroke', stylers: [{color: '#242f3e'}]},
            {elementType: 'labels.text.fill', stylers: [{color: '#ffffff'}]},
            {
              featureType: 'administrative.locality',
              elementType: 'labels.text.fill',
              stylers: [{color: '#d59563'}]
            },
            {
              featureType: 'poi',
              elementType: 'labels.text.fill',
              stylers: [{color: '#d59563', visibility:'off'}]
            },
			{
              featureType: 'poi.business',
              stylers: [{visibility:'off'}]
            },
            {
              featureType: 'poi.park',
              elementType: 'geometry',
              stylers: [{color: '#263c3f', visibility:'off'}]
            },
            {
              featureType: 'poi.park',
              elementType: 'labels.text.fill',
              stylers: [{color: '#6b9a76', visibility:'off'}]
            },
            {
              featureType: 'road',
              elementType: 'geometry',
              stylers: [{color: '#38414e'}]
            },
            {
              featureType: 'road',
              elementType: 'geometry.stroke',
              stylers: [{color: '#212a37'}]
            },
            {
              featureType: 'road',
              elementType: 'labels.text.fill',
              stylers: [{color: '#9ca5b3'}]
            },
            {
              featureType: 'road.highway',
              elementType: 'geometry',
              stylers: [{color: '#3873ae'}]
            },
            {
              featureType: 'road.highway',
              elementType: 'geometry.stroke',
              stylers: [{color: '#1f2835'}]
            },
            {
              featureType: 'road.highway',
              elementType: 'labels.text.fill',
              stylers: [{color: '#ffffff'}]
            },
            {
              featureType: 'transit',
              elementType: 'geometry',
              stylers: [{color: '#2f3948'}]
            },
            {
              featureType: 'transit.station',
              elementType: 'labels.text.fill',
              stylers: [{color: '#d59563'}]
            },
            {
              featureType: 'water',
              elementType: 'geometry',
              stylers: [{color: '#17263c'}]
            },
            {
              featureType: 'water',
              elementType: 'labels.text.fill',
              stylers: [{color: '#515c6d'}]
            },
            {
              featureType: 'water',
              elementType: 'labels.text.stroke',
              stylers: [{color: '#17263c'}]
            }
          ]
			  };

			var contentString = 
			'<div class="panel panel-default text-center">'+
			' <div class="panel-heading">'+
			' <div class="row">'+
			' <div class="col-sm-6">'+
			' <p><b>Focus On Services</b></p><p>Transformación digital</p>'+
			'<p>Servicios y Tecnologías de Información </p>'+
			' </div>'+
			' <div class="col-sm-6">'+
			' <img src="https://s3-media4.fl.yelpcdn.com/bphoto/YJOONGLkvxb5PbUPzWy4tQ/300s.jpg" width="200"></img>'+
			' </div>'+
			' </div>'+
			'</div></div>'
			;
			
			var infowindow = new google.maps.InfoWindow({
			content: contentString
			});

			  map = new google.maps.Map(document.getElementById('google-map'),
					  mapOptions);

			  marker = new google.maps.Marker({
				map:map,
				draggable:false,
				position: markerposition,
				title: 'Focus On Services',
				//icon: 'js/marker.png'

			  });
				marker.addListener('mouseover', function() {
				infowindow.open(map, marker);
				});
			  google.maps.event.addListener(marker, 'click', toggleBounce);
			}

			function toggleBounce() {

			  if (marker.getAnimation() != null) {
				marker.setAnimation(null);
			  } else {
				marker.setAnimation(google.maps.Animation.BOUNCE);
			  }
			}

			google.maps.event.addDomListener(window, 'load', initialize);
	
})(jQuery);
   var map;
   
   function initMap() {
		var styledMapType = new google.maps.StyledMapType(
			[
			    {
			        "featureType": "administrative.locality",
			        "elementType": "all",
			        "stylers": [
			            {
			                "hue": "#2c2e33"
			            },
			            {
			                "saturation": 7
			            },
			            {
			                "lightness": 19
			            },
			            {
			                "visibility": "on"
			            }
			        ]
			    },
			    {
			        "featureType": "landscape",
			        "elementType": "all",
			        "stylers": [
			            {
			                "hue": "#ffffff"
			            },
			            {
			                "saturation": -100
			            },
			            {
			                "lightness": 100
			            },
			            {
			                "visibility": "simplified"
			            }
			        ]
			    },
			    {
			        "featureType": "poi",
			        "elementType": "all",
			        "stylers": [
			            {
			                "hue": "#ffffff"
			            },
			            {
			                "saturation": -100
			            },
			            {
			                "lightness": 100
			            },
			            {
			                "visibility": "off"
			            }
			        ]
			    },
			    {
			        "featureType": "road",
			        "elementType": "geometry",
			        "stylers": [
			            {
			                "hue": "#bbc0c4"
			            },
			            {
			                "saturation": -93
			            },
			            {
			                "lightness": 31
			            },
			            {
			                "visibility": "simplified"
			            }
			        ]
			    },
			    {
			        "featureType": "road",
			        "elementType": "labels",
			        "stylers": [
			            {
			                "hue": "#bbc0c4"
			            },
			            {
			                "saturation": -93
			            },
			            {
			                "lightness": 31
			            },
			            {
			                "visibility": "on"
			            }
			        ]
			    },
			    {
			        "featureType": "road.arterial",
			        "elementType": "labels",
			        "stylers": [
			            {
			                "hue": "#bbc0c4"
			            },
			            {
			                "saturation": -93
			            },
			            {
			                "lightness": -2
			            },
			            {
			                "visibility": "simplified"
			            }
			        ]
			    },
			    {
			        "featureType": "road.local",
			        "elementType": "geometry",
			        "stylers": [
			            {
			                "hue": "#e9ebed"
			            },
			            {
			                "saturation": -90
			            },
			            {
			                "lightness": -8
			            },
			            {
			                "visibility": "simplified"
			            }
			        ]
			    },
			    {
			        "featureType": "transit",
			        "elementType": "all",
			        "stylers": [
			            {
			                "hue": "#e9ebed"
			            },
			            {
			                "saturation": 10
			            },
			            {
			                "lightness": 69
			            },
			            {
			                "visibility": "on"
			            }
			        ]
			    },
			    {
			        "featureType": "water",
			        "elementType": "all",
			        "stylers": [
			            {
			                "hue": "#46bcec"
			            },
			            {
			                "saturation": 20
			            },
			            {
			                "lightness": 0
			            },
			            {
			                "visibility": "simplified"
			            }
			        ]
			    }
			],{name:'Peta PPI'}
			);
      // endof style map (source: snazzymaps)

      // init a new map
	    map = new google.maps.Map(document.getElementById('mapKota'), {
	       zoom: 5,
	       center: new google.maps.LatLng(60.7421068,8.4414394),
	       mapTypeControlOptions: {
	           mapTypeIds: ['roadmap', 'satellite', 'hybrid', 'terrain',
	                   'styled_map']
         	}
     	});

      // set style
    	map.mapTypes.set('styled_map', styledMapType);
    	map.setMapTypeId('styled_map');

      // infow window for each city
    var infoWindow = new google.maps.InfoWindow(), marker, i;
    var description;

    	// get data kota from kota.json
    	jQuery.getJSON('/yggdrasil/wp-content/themes/bestla/library/js/kota.json', function(data){
    		jQuery.each(data.points, function(i,value){
    			var position = new google.maps.LatLng(value.lat, value.lng);
    			marker = new google.maps.Marker({
                 position: position,
                 map: map,
                 title: value.title
            });

    			google.maps.event.addListener(marker, 'click', (function(marker, i) {
	            return function() {
	                // set description for infowindow
                   description = "<a href='"+value.link+"' class='infoWindow-city'>"+value.title+"</a>"+
                                  "<p>Mahasiswa S1:"+value.s1+"</p>"+
                                  "<p>Mahasiswa S2:"+value.s2+"</p>"+
                                  "<p>Mahasiswa S3:"+value.s3+"</p>"+
                                  "<p>Mahasiswa Exchange:"+value.exchange+"</p>";
	                infoWindow.setContent(description);
	                infoWindow.open(map, marker);
	            }
	        })(marker, i));
    		});
    	});
     
   }


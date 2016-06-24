  /* Déclaration des variables  */
  var geocoder = new google.maps.Geocoder();
  var map;
  var marker;
  var service;

/* Fonction chargée de géocoder l'adresse  */
   function codeAddress() {

    var address = document.getElementById("recherche_ville").value;

    if(address) {
      geocoder.geocode( { 'address': address + ' France'}, function(results, status) {
        if (status == google.maps.GeocoderStatus.OK) {
          var coords = results[0].geometry.location
         codeLatLng(coords.lat()+','+coords.lng()); 

        } else {
          alert("Le geocodage n\'a pu etre effectue pour la raison suivante: " + status);
        }
      });
    }
  }


  /* Fonction de géocodage inversé (en fonction des coordonnées de l'adresse)  */
  function codeLatLng(input) {
    var latlngStr = input.split(",",2);
    var lat = parseFloat(latlngStr[0]);
    var lng = parseFloat(latlngStr[1]);
    var latlng = new google.maps.LatLng(lat, lng);
    geocoder.geocode({'latLng': latlng}, function(results, status) {
      if (status == google.maps.GeocoderStatus.OK) {
        if (results[0]) {
          var elt = results[0].address_components;
          for(i in elt){
            if(elt[i].types[0] == 'postal_code')
        	document.getElementById('recherche_cp').value = elt[i].long_name;
        	if(elt[i].types[0] == 'locality')
            document.getElementById('recherche_ville').value = elt[i].long_name;
          }
        }
      } else {
        alert("Geocoder failed due to: " + status);
      }
    });
  }

  var adressArray = [];
  function getCoordinate(ville, cp) {
    adresse = ville +' '+cp;
    console.log(adresse);
    adressArray.push(adresse);

    var getCurrentPosition = document.getElementById("recherche_ville").value;

    getPositionsCurrent(getCurrentPosition);
  }

  function getPositionsCurrent(value) {
    geocoder.geocode( { 'address': value + ' France'}, function(results, status) {
      if (status == google.maps.GeocoderStatus.OK) {
        var coords = results[0].geometry.location
        var lat = parseFloat(coords.lat());
        var lng = parseFloat(coords.lng());

        currentLocation = new google.maps.LatLng(lat, lng);

        var mapOptions= {
            center: currentLocation,
            zoom :13,
            mapTypeId: google.maps.MapTypeId.HYBRID
        };

        map = new google.maps.Map(document.getElementById("map-canvas"), mapOptions);

        var marker = new google.maps.Marker({
            position: currentLocation,
            map: map
        });

        google.maps.event.addListenerOnce(map, 'bounds_changed', handleSearchResults(adressArray));
      } else {
        alert("Le geocodage n\'a pu etre effectue pour la raison suivante: " + status);
      }
    });
  }

  function getAdressePositions(value) {
    for(var i = 0; i < value.length; i++) {
      console.log(value[i]);
      geocoder.geocode( { 'address': value[i] + ' France'}, function(results, status) {
        if (status == google.maps.GeocoderStatus.OK) {
          var coords = results[0].geometry.location
          var lat = parseFloat(coords.lat());
          var lng = parseFloat(coords.lng());

          adresse_loc = new google.maps.LatLng(lat, lng);

          var marker = new google.maps.Marker({
            position: adresse_loc,
            map: map,
            icon: "{{ asset('images/logo-babyAdvisor.png') }}"
          });
        } else {
          alert("Le geocodage n\'a pu etre effectue pour la raison suivante: " + status);
        }
      });
    }
  }

  $(function(){
    $('div[onload]').trigger('onload');
  });
    
  function handleSearchResults(results) 
    {
      var coordonnates = getAdressePositions(results);
    }

 	function getPosition() {
 		var options = {
  			enableHighAccuracy: true,
  			timeout: 5000,
  			maximumAge: 0
		};

		function success(pos) {
  			var crd = pos.coords;
  			codeLatLng(crd.latitude +','+crd.longitude); 
		};

		function error(err) {
  			console.warn('ERROR(' + err.code + '): ' + err.message);
		};
		navigator.geolocation.getCurrentPosition(success, error, options);
	}

  function retrieve(){
    var input = document.getElementById("latlng").value;
    codeLatLng(input);

  }
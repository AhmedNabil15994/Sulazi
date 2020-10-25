function initialize(input,result) {
    var autocomplete = new google.maps.places.Autocomplete(input);
    autocomplete.addListener('place_changed', function() {
        place = autocomplete.getPlace();
        var icon = input.previousElementSibling.firstChild.nextSibling;

        if (!place.geometry) {
            result.value = '';
            setTimeout(function () {
                toastr.error('Hatly Delivery System', "No details available for : '" + place.name + "'" );
            }, 1000);
            return;
        }
        var latlng = {
            lat: place.geometry.location.lat(),
            lng: place.geometry.location.lng()
        }
        geocodeLatLng(input,latlng,place,result);
    });
    
}

/**** Geocoding Address By Input ****/
function geocodeLatLng(input,latlng,place = null,result){
    geocoder = new google.maps.Geocoder();
    geocoder.geocode( { 'location': latlng}, function(results, status) {
        if (status == 'OK') {  
            var zip = '',
                street_number = '',
                route = '',
                city = '',
                country = '';
            if(place == null){
                place = results[0];
                input.value = place.formatted_address;
            }
            $.each(place.address_components, function(){
                switch(this.types[0]){
                    case "postal_code":
                        zip = this.short_name;
                        break;
                    case "street_number":
                        street_number = this.short_name;
                        break;
                    case "route":
                        route = this.short_name;
                        break;    
                    case "administrative_area_level_1":
                        city = this.short_name;
                        break;
                    case "country":
                        country = this.long_name;
                        break;                  
                }
            });       

            var placeObj = {
                "postal_code": zip,   
                "home": street_number,   
                "street": route,   
                "city": city,   
                "country": country,   
                "latlng": [latlng.lat,latlng.lng],   
            };
            result.value = JSON.stringify(placeObj);
            console.log(placeObj);
            if(street_number == ''){
                setTimeout(function () {
                    toastr.warning('Hatly Delivery System', "Invalid Street Number" );
                }, 1000);
            }              
        }else {
            setTimeout(function () {
                toastr.error('Hatly Delivery System', 'Geocode was not successful for the following reason: ' + status);
            }, 1000);
        }
    });
}

/**** Marker Get Location ****/
// function getLocation() {
//     if (navigator.geolocation) {
//         navigator.geolocation.getCurrentPosition(showPosition);
//     } else { 
//         setTimeout(function () {
//             toastr.error('Rayagate Engine', "Geolocation is not supported by this browser." );
//         }, 1000);
//     }
// }
    
// function showPosition(position) {
//     var latlng = {
//         lat: position.coords.latitude,
//         lng: position.coords.longitude
//     }
//     geocodeLatLng(latlng,document.getElementById("fromGeoAddress").previousElementSibling.firstChild.nextSibling,null,document.getElementById("from"));
// }
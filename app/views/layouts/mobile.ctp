<html>
<head>
<title>FoundFree.org a community for you to Find and Share Free things
	found in your adventures the world!</title>
<link rel="stylesheet"
	href="http://code.jquery.com/mobile/1.0a4.1/jquery.mobile-1.0a4.1.min.css" />
<script src="http://www.google.com/jsapi?key=" type="text/javascript"></script>
<script type="text/javascript">
		google.load("maps", "3", {'other_params':'sensor=true'});
	</script>
<script src="http://code.jquery.com/jquery-1.5.2.min.js"></script>
<script
	src="http://code.jquery.com/mobile/1.0a4.1/jquery.mobile-1.0a4.1.min.js"></script>
<script type="text/javascript" src="js/jquery.ui.map.min.js"></script>
<script type="text/javascript">
            $(function() {
                $.mobile.ajaxFormsEnabled = false;
                $.mobile.loadingMessage = 'Loading "FoundFree" Stuff';

                $("#setLocation").live("click", function() {
                    geoCoder = new google.maps.Geocoder();
                    address = $("#stuff_address").val();
                    console.log($("#stuff_address").val());
                    city = $("#stuff_city").val();
                    state = $("#stuff_state").val();
                    zip = $("#stuff_zip").val();

                    geoReq = {
                        address: address+' '+city+' '+state+' '+zip
                    };

                    geoCoder.geocode(geoReq, function(geoRslt, geoStatus) {
                        if(geoStatus=="OK") {

                            console.log(geoRslt);
                            $("#stuff_lat").val(geoRslt[0].geometry.location.Da);
                            $("#stuff_lng").val(geoRslt[0].geometry.location.Ea);
                            $("#saveFoundFree").button('enable');
                            $('#location').dialog ('close');
                            //$.mobile.changePage($("#upload"), 'slideup');
                        } else {
                            alert("Please enter a valid address");
                            return false;
                        }
                    });

                });
            });

            function getLatLng() {
		if(google.loader.ClientLocation != null) {
			return new google.maps.LatLng(google.loader.ClientLocation.latitude, google.loader.ClientLocation.longitude);
		}
		return new google.maps.LatLng(59.3426606750, 18.0736160278);
            }

            function _getLat(){
                    return google.loader.ClientLocation.latitude;
            }

            function _getLng() {
                    return google.loader.ClientLocation.longitude;
            }

            function addMarker(cnvs,lat,lng,info) {
                info = (info.txt) ? info.txt : 'Added Marker!';
                title = (info.title) ? info.title  : 'title';
                console.log(cnvs);
                $(cnvs).gmap('Marker', {
                        'position': new google.maps.LatLng(lat, lng),
                        'animation': google.maps.Animation.DROP,
                        'title': "title"
                }, function(map, marker) {
                    console.log(map);
                    /*$('#map_canvas').gmap('addInfoWindow', {
                        'position':marker.getPosition(),
                        'content': info
                    }, function(iw) {
                        $(marker).click(function() {
                            iw.open(map, marker);
                            //map.panTo(marker.getPosition());
                        });
                    });*/
                });

            }

        </script>
</head>

<body>
<?php echo $this->Session->flash(); ?>
<?php echo $content_for_layout; ?>
</body>
</html>

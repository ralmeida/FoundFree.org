      	function showLoading(toogle) {
   		//alert("in showLoading");
   		if(toogle) {
   			$('#block-ui').show();
   			$.mobile.pageLoading(false);
   		} else {
   			$('#block-ui').hide();
   			$.mobile.pageLoading(true);
   		}
   	}

   	function _makeInfoHtml(val) {
   		img = (val.img) ? val.img : val.image;
   		return '<div style="text-align:center;">' +
   	    '<span><b>'+val.title+'</b><br /> ' +
   	    '<span style="font-size:small;">'+
   	    '<em>by '+val.user+'</em></span></span><br />' +
   	    '<div style="margin-top:8px;"><img src="'+img+'&small=1" style="margin-right:auto;margin-left:auto;" />' +
   	    '</div>';
   	}

   	function showBrowseListing(items, callback) {
   		if(!items) return;
   		var list = $('#list');
   		list.html("");
   		var i=0;
   		$.each(items, function(key, val) {
   			item = "<a href='#details' class='stuffRow' indx='"+i+"' id='_sRow-"+val.id+"'><div>" +
   				   "<h3>"+val.title+"<h3>" +
   				   "<img src='"+val.img+"' /> " +
   				   " <br />" +
   				   "<small>Found by <em>" + val.user + "</em></small>" +
   				   "</div></a>";
   			list.append( $(document.createElement('li')).html(item) );
   			i++;
   		});
   		list.listview("destroy").listview();
   		showLoading(false);
   		if(callback) callback();
   	}
   	
   	function _loadStuff(callback) {
   		getLocalListings(null, function(respData) {
			showBrowseListing(respData.data, callback);
		});
   	}

   	function getLocalListings(opt, callback) {
   		//alert("getLocalListings");
   		showLoading(true);
   		if(!callback) {
   			callback = function(respData) {
   				showLoading(false);
   				// nothing atm.... just pass a callback!!!
   			};
   		}
   		$.getJSON('http://www.phunsauce.com/foundfree/actions/list.php',callback);
   	}

   	function getRecord(id, callback) {
   		showLoading(true);
   		if(!callback) {
   			callback = function(respData) {
   	       		//$.mobile.changePage($("#details"), 'slideup');
   				var val=respData.data;
   				var img=(val.image) ? val.image : val.img;
   				$("#stuff_detail_title").html(val.title);
   				$("#stuff_detail_img").attr("src", img);
   	       		pos = new google.maps.LatLng(val.lng,val.lat);
   	       		$('#stuff_detail_map').gmap({
   	        		'center': pos,
   	        		'zoom': 12,
   	        		'callback': function() {
   	        	    	$('#stuff_detail_map').gmap('addControl', 'sidebar', google.maps.ControlPosition.LEFT_TOP);
   	        	    	$('#stuff_detail_map').gmap('addMarker', {
   	        	 			'position': pos,
   	        	 			'animation': google.maps.Animation.DROP,
   	        	 			'title': title
   	        			}, function(map, marker) {
   	        				$('#stuff_detail_map').gmap('addInfoWindow', {
   	        					'position': pos,
   	        					'content': _makeInfoHtml(val)
   	        				}, function(iw) {
   	        					$(marker).click(function() {
   	        						iw.open(map, marker);
   	        						map.panTo(marker.getPosition());
   	        					});
   	        				});
   	        			});
   	        		}
   	        	});
   	       		showLoading(false);
   			};
   		}
   		$.getJSON('http://phunsauce.com/foundfree/actions/read.php?id='+id, callback);
   	}

   	function _setRecord(record) {
		var val=record;
		var img=(val.image) ? val.image : val.img;
		$("#stuff_detail_title").html(val.title);
		$("#stuff_detail_img").attr("src", img);
		pos = new google.maps.LatLng(val.lng,val.lat);
		$('#stuff_detail_map').gmap({
			'center': pos,
			'zoom': 12,
			'callback': function() {
		    	$('#stuff_detail_map').gmap('addControl', 'sidebar', google.maps.ControlPosition.LEFT_TOP);
		    	$('#stuff_detail_map').gmap('addMarker', {
		 			'position': pos,
		 			'animation': google.maps.Animation.DROP,
		 			'title': title
				}, function(map, marker) {
					$('#stuff_detail_map').gmap('addInfoWindow', {
						'position': pos,
						'content': _makeInfoHtml(val)
					}, function(iw) {
						$(marker).click(function() {
							iw.open(map, marker);
							map.panTo(marker.getPosition());
						});
					});
				});
			}
		});     	
   	}
   	
   	/*
   	*
   	*   MAPS
   	*
   	*/
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

   	function addMarker(lat,lng,info) {
   		pos = new google.maps.LatLng(lat, lng);
   		title = (info.title) ? info.title  : 'title';
   		info = (info.txt) ? info.txt : 'Added Marker!';
   		$('#map_canvas').gmap('addMarker', {
   			'position': pos,
   			//'animation': google.maps.Animation.DROP,
   			'title': title
   		}, function(map, marker) {
   			$('#map_canvas').gmap('addInfoWindow', {
   				'position': pos,
   				'content': info
   			}, function(iw) {
   				$(marker).click(function() {
   					iw.open(map, marker);
   					//map.panTo(marker.getPosition());
   				});
   			});
   		});
   	}

   	function geolocationSuccess(position) {
   		myLoc = position;
   		_setMainMap(position.coords.latitude,position.coords.longitude);
   	}

   	function geolocationFail(error) {
   		showLoading(false);
   		switch(error.code) {
   			case 1:
   				alert(error.PERMISSION_DENIED);
   				break;
   			case 2:
   				alert(error.POSITION_UNAVAILABLE);
   				break;
   			case 3:
   				alert(error.TIMEOUT);
   				break;
   			default:
   				alert("Geo Location Error");
   				break;
   		}
   	}

   	function _setMainMap(latitude,longitude) {
   		$('#map_canvas').gmap({
   			'center': new google.maps.LatLng(latitude,longitude),
   			'zoom': 12,
   			'callback': function() {
   		    	$('#map_canvas').gmap('addControl', 'sidebar', google.maps.ControlPosition.LEFT_TOP);
   			}
   		});
   		_setMainMarkers(false);
   	}

   	function _setMainMarkers(items) {
   		if(!items) items = Stuff;
   		if(!items) {
	        _getMainMarkers(function(Stuff) {
	            _setMainMarkers(Stuff);
	        });
   		} else {
   			showLoading(false);
   			$.each(items, function(key, val) {
   				item = {
   					title: val.title,
   					txt: _makeInfoHtml(val)
   				};
   				addMarker(val.lng, val.lat, item);
   			});
   		}
   	}

   	function _getMainMarkers(callback) {
		showLoading(true);
		getLocalListings(null, function(respData) {
			showLoading(false);
			Stuff = respData.data;
			if(callback) callback(Stuff);
		});
   	}

   	/*
   	*
   	*   Camera
   	*
   	*/
   	var cameraOptions = [];

   	//Called when a photo is successfully retrieved
   	function onPhotoDataSuccess(imageData) {
   	   	curFile = imageData;
   	   	setStuffForm();
   	}

   	//A button will call this function
   	function capturePhoto() {
   	   	// Take picture using device camera and retrieve image as base64-encoded string
   	   	navigator.camera.getPicture(onPhotoDataSuccess, onFail, {
   	   		  quality: 50,
   	   		  destinationType: Camera.DestinationType.FILE_URI
   	   	});
   	}

   	//Called if something bad happens.
   	function onFail(mesage) {
   		alert('Failed because: ' + message);
   	}


   	// A button will call this function
   	function getPhoto(source) {
   	  // Retrieve image file location from specified source
   	  navigator.camera.getPicture(onPhotoDataSuccess, onFail, {
   	  	quality: 50,
   	    destinationType: destinationType.FILE_URI,
   	    sourceType: source
   	   });
   	}

   	/*
   	*
   	*   Stuff
   	*
   	*/
   	function setStuffForm() {
   		$("#stuff_title").val("");
   		$("#stuff_lat").val(myLoc.coords.latitude);
   		$("#stuff_lng").val(myLoc.coords.longitude);
   		$("#stuff_image_container").css("display", "block");
   		$("#stuff_image").css("display", "block").attr("src", curFile);
   	}

   	function clearStuffForm() {
   		$("#stuff_title").val("");
   		$("#stuff_lat").val("");
   		$("#stuff_lng").val("");
   		$("#stuff_image_container").css("display", "none");
   		$("#stuff_image").css("display", "none").attr("src", "");
   	}

   	function _saveStuff() {
   		showLoading(true);

   		var win = function(result) {
   			showLoading(false);
   	    	if(result.response.msg) alert(result.response.msg);
   	    	clearStuffForm();
   	    	_loadStuff(function() {
   	    		$.mobile.changePage($("#confirmUpload"), 'pop');
   	    	});
   	    	
   		}

   		var fail = function(error) {
   			showLoading(false);
   			alert(error.message);
   		}

   		var options = new FileUploadOptions();
   		options.fileKey="file";
   		options.mimeType="image/jpeg";

   		var params = new Object();
   		params.title = $("#stuff_title").val();
   		params.lat = $("#stuff_lat").val();
   		params.lng = $("#stuff_lng").val();

   		options.params = params;

   		var ft = new FileTransfer();
   		ft.upload(curFile, "http://phunsauce.com/foundfree/actions/upload.php", win, fail, options);
   	}


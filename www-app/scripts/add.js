var cameraOptions = [];

//Called when a photo is successfully retrieved
//
function onPhotoDataSuccess(imageData) {
  curFile = imageData;
  setStuffForm();
}

// A button will call this function
//
function capturePhoto() {
  // Take picture using device camera and retrieve image as base64-encoded string
  navigator.camera.getPicture(onPhotoDataSuccess, onFail, { 
	  quality: 80, 
	  destinationType: Camera.DestinationType.FILE_URI 
  });
}

// Called if something bad happens.
function onFail(mesage) {
  alert('Failed because: ' + message);
}

function _saveStuff() {
	$.mobile.pageLoading(false);
	var win = function(result) {
		
		$.mobile.pageLoading(true);
    	if(result.response.msg) alert(result.response.msg);
    	$.mobile.changePage($("#search"), 'slideup');
	}

	var fail = function(error) {
		$.mobile.pageLoading(true);
		switch(error.code) {
			case 1:
				alert(error.FILE_NOT_FOUND_ERR);
				break;
			case 2:
				alert(error.INVALID_URL_ERR);
				break;
			case 3:
				alert(error.CONNECTION_ERR);
				break;
			default:
				break;
		}
	    //alert("An error has occurred: Code = " + error.code);
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
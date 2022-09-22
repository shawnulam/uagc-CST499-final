<?php include('includes/session.php'); ?>

<head>
	<!-- Meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- CSS -->
	<link rel="stylesheet" href="css/jquery-ui.min.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
	<title>UUGC Class Enrollment</title>
</head>

<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/jquery/dist/jquery.min.js"></script>
<script src="scripts/jquery-ui.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- Javascript Functions -->
<script>
	// Dialog script for messages
	$( function(){
		$( "#dialog-message" ).dialog({
			modal: true,
			buttons: {
				Ok: function() {
					$( this ).dialog( "close" );
					window.open(woLink,'_self');
				}
			}});
	});

	// Check filesize for image
	jQuery(document).ready(function(){
		$('#image').bind('change', function() {
			// Check file size
			var file_size = this.files[0].size;
			if(file_size>256000) {
				alert("Please only upload files less than 256kb.");
				$(image).val('');
			}
		});
	});
</script>
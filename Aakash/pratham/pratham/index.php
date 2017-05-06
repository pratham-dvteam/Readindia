<html>
	<title>

	</title>

	<head>
		<script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
		<script type="text/javascript" src="js/jquery.plugin.min.js"></script>
		<script src="http://malsup.github.com/jquery.form.js"></script> 
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	</head>

	<body>

		<div class='container'>

			<h1> Upload image to server </h1>

			<form method="post" class="uploadform"  enctype="multipart/form-data" action='uploadphoto.php'>
				
				<input type="file" class="form-control inputBox" name="fileData" id="imgproof" placeholder="Upload Image File" multiple>
				<input type="hidden" name="fileName" id="uid" value="<?php echo getuniquetimestamp(); ?>">

				<span id='viewimage'></span>

				<button type='button' id='submitbtn'>Upload </button>
			</form>

			<script type='text/javascript'>
				
				$('#submitbtn').click(function(e){

					if($('#imgproof').val()!="")
		        	{
						//$('#imgproof').attr( "type", "submit" );
				    	$(".uploadform").ajaxForm({
						    target: '#viewimage'
						}).submit();
				    }
				    else {
				    	e.preventDefault();
				    }

				});
				
			</script>

			<?php 

				function getuniquetimestamp() {
					return 'image-'.time();
				}

			?>

			<br><br><br>
			<hr>
			<br><br>

			<?php

				$dbhost = "localhost";
				$dbusername="root";
				$dbpassword="";
				$dbname="image";

				
				$con = new mysqli($dbhost,$dbusername,$dbpassword,$dbname);
				// Check connection
				if ($con->connect_error) {
					trigger_error('Database connection failed - '. $con->connect_error, E_USER_ERROR);
				}
				
				// Create new owner.
				$sql = "SELECT location from imageupload;";
				
				$result=$con->query($sql);
				if($result == false) {
					$result[] = array('result' => 'fail', 'error_msg' => 'Failed to save image info in DB.');
					echo json_encode($result);
					exit();					
				}
				else {
					echo "<div class='panel panel-info'><div class='panel-heading'> Existing Images </div><div class='panel-body'>";
					while($row = $result->fetch_assoc()) {
					
						echo "<img src='".$row['location']."' width='200px' height='200px' style='margin: 20px;'>";
					}
					echo "</div></div>";
				}
				 
			?>

		</div>

	</body>

<html>

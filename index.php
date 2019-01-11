<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=7; IE=EDGE" />
	<title>Upload HR Kiosk</title>
	<link rel="stylesheet" href="css/styles.css">
	
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>

    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

  <script>

  $( function() {

    $( "#datepicker" ).datepicker();

  } );

  </script>


	
</head>

<body>



<div id="wrapper">
		<div id ="Header">
		    <img src="./images/st_logo.png" alt="ST Logo">
			<H1> Upload Files in HRKiosk </H1>
		</div>
		
		<div id="user_data">
			<form method="POST" enctype="multipart/form-data" action=''">
				<p>
					<label for = "filename">Enter File Name:</label>
					<input type="text" onfocus="this.value=''" name="dirname" value="Enter File Name here" id="filename">
				</p>
				<p>
					<label for="datepicker">Expiry Date:</label>
					<input type="text" name="expDate" id="datepicker">
				</p>

				<p>
					<input class ="f" type="file" name="file[]" multiple>
				</p>

				<p id ="pbutton">
					<input id="doneBtn" type="submit" name='submit' value="Upload">
				</p>
				
				<p id="last">
					<a href="http://hrkiosk/Pin/ " target=”_blank”>View Live Preview</a>
					</p>
			</form> 
		
		</div>
		<div id="Footer">
		   <H5>Application Proprietary of STMicroelectronics Malta. Developed by Local ICT</H5>
		</div>
	
	</div>

</body>
</html>

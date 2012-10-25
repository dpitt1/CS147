<!DOCTYPE html> 
<html>

<head>
	<title>DJ PROS</title> 
	<meta charset="utf-8">
	<meta name="apple-mobile-web-app-capable" content="yes">
 	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<meta name="viewport" content="width=device-width, initial-scale=1"> 

	<link rel="stylesheet" href="jquery.mobile-1.2.0.css" />

	<link rel="stylesheet" href="style.css" />
	<link rel="apple-touch-icon" href="appicon.png" />
	<link rel="apple-touch-startup-image" href="startup.png">
	
	<script src="jquery-1.8.2.min.js"></script>
	<script src="jquery.mobile-1.2.0.js"></script>

</head> 

	
<body> 

<!-- Start of first page: #one -->
<div data-role="page" id="one">

	<div data-role="header">
		<h1>DJ PROS</h1>
	</div><!-- /header -->

	<div data-role="content">	
		<center><h2>SETTINGS<span id="username"></span></h2></center>
		
		<div data-role="collapsible">
		   <h3>Validate Venue</h3>
		   		<div data-role="fieldcontain">
		<label for="flip-s">Use GPS to validate venue:</label>
		<select name="flip-s" id="flip-s" data-role="slider">
			<option value="off">No</option>
			<option value="on">Yes</option>
		</select>
	    </div>
				<a href="#" data-role="button" data-icon="star">Validate Now</a>
		</div>
		
		<div data-role="collapsible">
		   <h3>VIP Mode</h3>
		  		   		<div data-role="fieldcontain">
		<label for="flip-s">Turn On Vip Mode</label>
		<select name="flip-s" id="flip-s" data-role="slider">
			<option value="off">No</option>
			<option value="on">Yes</option>
		</select>
	    </div>
		</div>

		<h3>                   </h3>	
	</div><!-- /content -->
	
	<?php include('footer.php'); ?>
</div>
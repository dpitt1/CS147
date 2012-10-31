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
			<div class="topButtonsBar">	
		<a class="homeButton" data-role="button" href="index.php" id="home" data-icon="custom" data-theme="a">(Home)</a>
		<a class="settingsButton" data-role="button" href="settings.php" id="gear" data-icon="custom" data-theme="a">(Settings)</a>
		</div><!-- /topButtonsBar -->

		<center><h2 class="red">BE THE DJ<span id="username"></span></h2></center>
				
<div data-role="fieldcontain">
	<label for="slider-3">BZZZZZZZZZZZZZZZZZZ Level</label>
	<input type="range" name="slider-3" id="slider-3" value="50" min="0" max="100" data-theme="a" data-track-theme="b" />
</div>

<div data-role="fieldcontain">
	<label for="slider-3">WAWAWAWAWAWAWAW Level</label>
	<input type="range" name="slider-3" id="slider-3" value="50" min="0" max="100" data-theme="a" data-track-theme="b" />
</div>


	<div class="bottomButtons"><a class="viewDjButton" data-role="button" href="viewdj.php" id="coffee" data-icon="custom" data-theme="e">VIEW DJ</a></div>
	</div><!-- /content -->
	
	<?php include('footer.php'); ?>
</div>
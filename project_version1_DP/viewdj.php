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


		<center><h2>VIEW THE DJ<span id="username"></span></h2></center>
		
		<center><a class="ui-link" href="" > <img id="wavform" src="Waveform.gif"> </a> </center>
		
		<center><h5 class="red">**^^..^DJ Megabutt Superstar oN tHe breAkS^..^^**<span id="username"></span></h5></center>

		<div class="bottomButtons"><a class="beDjButton" data-role="button" href="bedj.php" id="skull" data-icon="custom" data-theme="e">BE DJ</a></div>

	</div><!-- /content -->
	
	<?php include('footer.php'); ?>
</div>
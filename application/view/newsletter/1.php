<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		body{
			margin: auto;
			max-width: 650px;
		}
		#header{
			width: 650px;
			height: 525px;
			position: relative;
		}
		#body{
			margin-left: 34px;
			margin-right: 34px;
			width: 582px;
		}
		.blocks{
			width: 285px;
			height: 360px;
			background-color: red;
			display: inline-block;
			margin-bottom: 12px;
			position: relative;
		}
		button{
			position: absolute;	
			right: 0;
		    bottom: 0;
		    border: none;
		    border-radius: 5px;
		    color: white;
		    cursor: pointer;
		}
		#header > button{
			width: 150px;
			height: 40px;
		    margin-right: 50px;
		    margin-bottom: 80px;
		    background-color: #337ab7;
		    font-weight: bold;
		    font-size: 21px;
		}
		.blocks > button{
			width: 113px;
		    height: 29px;		    
		    margin-right: 18px;
		    margin-bottom: 11px;
		    font-size: 17px;
		}
		@font-face {
		    font-family: raleway-bold;
		    src: url(<?php echo Config::get('URL'); ?>public/assets/fonts/raleway/Raleway-Bold_0.ttf);
		}
		@font-face {
		    font-family: raleway-medium;
		    src: url(<?php echo Config::get('URL'); ?>public/assets/fonts/raleway/Raleway-Medium_0.ttf);
		}
		#footer{
			text-align: center;
		}
		#footer-title{
			font-family: raleway-bold;
			font-size: 18px;
			color: #1c3858;
		}
		#footer-subtitle{
			font-family: raleway-medium;
			font-size: 12px;
			color: #337ab7;
		}
	</style>
</head>
<body>
	<div id="header">
		<img src="<?php echo Config::get('URL'); ?>public/assets/img/newsletter/header-banner.png">
		<button>Book Now!</button>
	</div>
	<div id="body">
		<div class="blocks" style="margin-right: 8px;">
			<img src="<?php echo Config::get('URL'); ?>public/assets/img/newsletter/1.png">
			<button style="background-color: #f7a01f;">Book Now!</button>
		</div>
		<div class="blocks">
			<img src="<?php echo Config::get('URL'); ?>public/assets/img/newsletter/2.png">
			<button style="background-color: #04dcd7;">Book Now!</button>
		</div>
		<div class="blocks" style="margin-right: 8px;">
			<img src="<?php echo Config::get('URL'); ?>public/assets/img/newsletter/3.png">
			<button style="background-color: #3842fb;">Book Now!</button>
		</div>
		<div class="blocks">
			<img src="<?php echo Config::get('URL'); ?>public/assets/img/newsletter/4.png">
			<button style="background-color: #1e91fe;">Book Now!</button>
		</div>
		<div class="blocks" style="margin-right: 8px;">
			<img src="<?php echo Config::get('URL'); ?>public/assets/img/newsletter/5.png">
			<button style="background-color: #4cd138;">Book Now!</button>
		</div>
		<div class="blocks">
			<img src="<?php echo Config::get('URL'); ?>public/assets/img/newsletter/6.png">
			<button style="background-color: #3842fb;">Book Now!</button>
		</div>
	</div>
	<div id="footer">
		<br>
		<div id="footer-title">Get in touch with us</div>
		<div id="footer-subtitle">Call us and we are happy to assist you</div>
		<br><br>
	</div>
</body>
</html>
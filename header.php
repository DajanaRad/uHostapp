<?php
$path =  __DIR__;

?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>uHost Hosting</title>
	<link rel="stylesheet" type="text/css" href="shared.css">
	<link rel="stylesheet" type="text/css" href="home_page
	.css">
</head>

<body>
	<div class="backis"></div>
	<div class="modal">
		<h1 class="modal__title">Do you want to continue?</h1>
		<div class="modal__actions">
			<a href="test/" class="modal__action">Yes!</a>
			<button class="modal__action modal__action--negative" type="button">No!</button>
		</div>
	</div>

	<header class="nav-header">
		<div class="logo-div">
			<div class="nav-button">
				<button>
					<span class="button-bar"></span>
					<span class="button-bar"></span>
					<span class="button-bar"></span>
				</button>
			</div>
			<div class="main-div">
				<a href="home_page.php">
					<img class="logo" src="test\photos\uhost-icon.png" alt="uhost-your favorite hosting company">
				</a>
			</div>
		</div>
		<nav class="main-nav">
			<ul class="main-nav-items">
				<li class="main-nav-item">
					<a href="test\packages.php">Pakages</a>
				</li>
				<li class="main-nav-item">
					<a href="test\customers.php">Customers</a>
				</li>
				<li class="main-nav-item main-nav-item-a">
					<a href="test\.php">Start Hosting</a>
				</li>
			</ul>
		</nav>
	</header>
	<nav class="mobile-nav">
		<ul class="mobile-nav-items">
			<li class="mobile-nav-item">
				<a href="test\packages.php">Pakages</a>
			</li>
			<li class="mobile-nav-item">
				<a href="test\customers.php">Customers</a>
			</li>
			<li class="mobile-nav-item mobile-nav-item-a">
				<a href="test\signup.php">Start Hosting</a>
			</li>
		</ul>
	</nav>
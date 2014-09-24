<!DOCTYPE html>
<html lang='en'>
	<head>
		<title><?php echo $title; ?></title>
		<link rel="stylesheet" href="style.css">
		<?php if (function_exists('customPageHeader')){
			customPageHeader();
		}?>
		<?php
if ($active == "Home"){ echo '<style>nav{ background-color:#673ab7; }</style>';}
if ($active == "News"){ echo '<style>nav{ background-color:#3f51b5; }</style>';}
if ($active == "Members"){ echo '<style>nav{ background-color:#009688; }</style>';}
if ($active == "About"){ echo '<style>nav{ background-color:#ff5722; }</style>';}
if ($active == "Contact"){ echo '<style>nav{ background-color:#607d8b; }</style>';}?>
		
	</head>
	<body>
		<nav>
			<div class="nav-wrapper">
				<ul class="nav-list">
					<a href="index.php"><li>Whitmer Unicycling Society</li></a>
					<a href="index.php"><li class="nav-item <?php if ($active == "Home"){ echo 'active';}?>">Home</li></a>
					<a href="news.php"><li class="nav-item <?php if ($active == "News"){ echo 'active' ;}?>">News</li></a>
					<a href="members.php"><li class="nav-item <?php if ($active == "Members"){ echo 'active';}?>">Members</li></a>
					<a href="about.php"><li class="nav-item <?php if ($active == "About"){ echo 'active';}?>">About</li></a>
					<a href="contact.php"><li class="nav-item <?php if ($active == "Contact"){ echo 'active';}?>">Contact Us</li></a>
				</ul>
			</div>
		</nav>
		<div class="nav-spacer"></div>

<!DOCTYPE html>
<html>
<head>
	<title>Test</title>
	<link href="https://fonts.googleapis.com/css?family=Questrial&display=swap" rel="stylesheet"> 
	<script type="text/javascript" src="views/script/VliveImage.js"></script>
	<script type="text/javascript" src="views/script/script.js"></script>
	<link rel="stylesheet" type="text/css" href="views/style/style.css">
	
	<link rel="stylesheet" type="text/css" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css">
  	<script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js" crossorigin=""></script>
</head>

<body><!--
 <h1>This is a header!</h1>
 
 <ul id="villes">
  <li data-geo="[50.62278,3.14417]" data-insee="59009">Villeneuve-d'Ascq</li>
  <li data-geo="[50.63164,3.06183]" data-insee="59350">Lille</li>
   etc ... 
</ul>
<div id = "background"></div>
<div id="carte_campus"></div>-->
<header> 
	<a href="" id="logo">Logo</a>
	<a href="" class="links">Link1</a>
	<a href="" class="links">Link2</a>
</header>

<div id="stationMenu">
	<div id= "filterdiv">
		<div class="formfield-select--container">
			<select id="mon_select">
				<option>Toutes les communes</option>
				<option>Lille</option>
				<option>Hellemmes</option>
				<option>La Madeleine</option>
				<option>Mons En Baroeul</option>
				<option>Villeneuve D'ascq</option>
				<option>Roubaix</option>
				<option>Tourcoing</option>
				<option>Saint Andre Lez Lille</option>
				<option>Ronchin</option>
				<option>Lomme</option>
				<option>Croix</option>
				<option>Lambersart</option>
				<option>Faches-Thumesnil</option>
				<option>Lille Hellemmes</option>
				<option>Loos</option>
			</select>
		</div>
		<div>
			<input type="text" name="search" id="searchbar" placeholder="Chercher une station">
		</div>

	</div>
	<div id="contain">
		<?php 
		include("lib/index.php");		
 		?>
	</div>
	
</div>
<div id="carte_campus"></div>



</body>
</html>
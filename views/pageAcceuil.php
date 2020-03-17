<!DOCTYPE html>
<html>
<head>
	<title>Test</title>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
	<link href="https://fonts.googleapis.com/css?family=Questrial&display=swap" rel="stylesheet"> 
	<script type="text/javascript" src="views/script/VliveImage.js"></script>
	<script type="text/javascript" src="views/script/script.js"></script>
	<link rel="stylesheet" type="text/css" href="views/style/style.css">
	<script type="text/javascript" src="views/script/searchFilter.js"></script>

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
		<div>
			<input type="text" name="search" id="searchbar" onkeyup="searchFunction()" placeholder="Chercher une station">
		</div>
		<div class="formfield-select--container">
			<form action="#" method="get" id="selectco">
				<div id="select">
					<select id="mon_select" name="commune">
						<option>Toutes les communes</option>
						<option value="Lille">Lille</option>
						<option value="Hellemmes">Hellemmes</option>
						<option value="La+Madeleine">La Madeleine</option>
						<option value="Mons+En+Baroeul">Mons En Baroeul</option>
						<option value="Villeneuve+D'ascq">Villeneuve D'ascq</option>
						<option value="Roubaix">Roubaix</option>
						<option value="Tourcoing">Tourcoing</option>
						<option value="Saint+Andre+Lez+Lille">Saint Andre Lez Lille</option>
						<option value="Ronchin">Ronchin</option>
						<option value="Lomme">Lomme</option>
						<option value="Croix">Croix</option>
						<option value="Lambersart">Lambersart</option>
						<option value="Faches-Thumesnil">Faches-Thumesnil</option>
						<option value="Lille+Hellemmes">Lille Hellemmes</option>
						<option value="Loos">Loos</option>
					</select>
				</div>
				<div id="check">
					<div id="checkboxP">
					<input type="checkbox" name="avaiblep" value="p" id="checkP">
					<label for="checkP">Places Disponibles</label>
				</div>
				<div id="checkboxB">
					<input type="checkbox" name="avaibleb" value="b" id="checkB">
					<label for="checkB">Vélos Disponibles</label>
				</div>
				</div>
				<div id="buttonS">
					<button type="submit" form="selectco">Filtrer</button>
				</div>
			</form>
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
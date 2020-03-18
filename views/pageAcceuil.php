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


	<meta name='viewport' content='initial-scale=1,maximum-scale=1,user-scalable=no' />
	<script src='https://api.mapbox.com/mapbox.js/v3.2.1/mapbox.js'></script>
	<link href='https://api.mapbox.com/mapbox.js/v3.2.1/mapbox.css' rel='stylesheet' />

</head>

<body>
<header> 
	<div id="links">
		<a href="" id="logo">Logo</a>
		<span>
			<a href="" class="links">Home</a>
			<a href="views/credits.php" class="links" id="mid">Crédits</a>
			<a href="" class="links">About us</a>		
		</span>
		
	</div>
</header>

<div id="stationMenu">
	<div id= "filterdiv">
		<div>
			<input type="text" name="search" id="searchbar" onkeyup="searchFunction()" placeholder="Chercher une station">
		</div>
		<div class="formfield-select--container">
			<form action="#" method="post" id="selectco">
				<div id="select">
					<select id="mon_select" name="commune">
						<option selected="selected">Toutes les communes</option>
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
					<script type="text/javascript">
						document.getElementById('mon_select').value = "<?php 
						if(isset($_POST['commune'])){
							echo $_POST['commune'];
						}else{
							echo 'Toutes les communes';
						}

						?>";
					</script>
				</div>
				<div id="check">
					<div id="checkboxP">
					<input type="checkbox" name="avaiblep" value="p" id="checkP" <?php if(isset($_POST['avaiblep'])) echo "checked='checked'"; ?> >
					<label for="checkP">Places Disponibles</label>
				</div>
				<div id="checkboxB">
					<input type="checkbox" name="avaibleb" value="b" id="checkB" <?php if(isset($_POST['avaibleb'])) echo "checked='checked'"; ?>>
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
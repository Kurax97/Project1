
<?php 

// Array of all possible values
$possibleValues = ["TLC" ,"Lille", "Hellemmes", "La+Madeleine", "Mons+En+Baroeul", "Villeneuve+D'ascq", "Roubaix", "Tourcoing", "Saint+Andre+Lez+Lille", "Ronchin", "Lomme", "Croix", "Lambersart", "Faches-Thumesnil", "Lille+Hellemmes", "Loos"];

if(isset($_GET['commune'])){
	if(in_array($_GET['commune'], $possibleValues)){
		$link = "http://vlille.fil.univ-lille1.fr/?commune=".$_GET['commune'];
	}else{
		$link = "http://vlille.fil.univ-lille1.fr";
	}
}else{
		$link = "http://vlille.fil.univ-lille1.fr";
	}

require('fonctionStation.php');
$reponse = file_get_contents($link);
$listeOfStations = json_decode($reponse, true);
$listeOfActiveStations = activeStations($listeOfStations);

for ($i = 0; $i < sizeof($listeOfActiveStations); $i++){
	stationToDiv($listeOfActiveStations[$i]);
}


 ?>
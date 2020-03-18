
<?php 

// Array of all possible values
$possibleValues = ["TLC" ,"Lille", "Hellemmes", "La+Madeleine", "Mons+En+Baroeul", "Villeneuve+D'ascq", "Roubaix", "Tourcoing", "Saint+Andre+Lez+Lille", "Ronchin", "Lomme", "Croix", "Lambersart", "Faches-Thumesnil", "Lille+Hellemmes", "Loos"];


$bikes = 0;
$places = 0;
$tmpLink = "http://vlille.fil.univ-lille1.fr/?";


if(isset($_POST['commune'])){
	if(in_array($_POST['commune'], $possibleValues)){
		$tmpLink = "http://vlille.fil.univ-lille1.fr/?commune=".$_POST['commune']."&";
	}
}

if(isset($_POST['avaiblep'])){
	if(($_POST['avaiblep']) === "p"){
		$places = 1;
	}
}


if(isset($_POST['avaibleb'])){
	if(($_POST['avaibleb']) === "b"){
		$bikes = 1;
	}
}

$link = $tmpLink."nbvelosdispo=".$bikes."&nbplacesdispo=".$places;



$link2 = "http://vlille.fil.univ-lille1.fr/?nbvelosdispo=0&nvplacesdispo=0";
require('fonctionStation.php');
$reponse = file_get_contents($link);
$listeOfStations = json_decode($reponse, true);
$listeOfActiveStations = activeStations($listeOfStations);

for ($i = 0; $i < sizeof($listeOfActiveStations); $i++){
	stationToDiv($listeOfActiveStations[$i]);
}


 ?>
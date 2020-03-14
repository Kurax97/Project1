
<?php 
require('fonctionStation.php');

$reponse = file_get_contents("http://vlille.fil.univ-lille1.fr");
$listeOfStations = json_decode($reponse, true);
$listeOfActiveStations = activeStations($listeOfStations);

for ($i = 0; $i < sizeof($listeOfActiveStations); $i++){
	stationToDiv($listeOfActiveStations[$i]);
}
	

 ?>
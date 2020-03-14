<?php 

	function activeStations($listeOfStations){
		$listeOfActiveStations = array();
		for($i = 0; $i < sizeof($listeOfStations); $i++){
			if($listeOfStations[$i]["fields"]["etat"] === "EN SERVICE")
				array_push($listeOfActiveStations, $listeOfStations[$i]);
		}
		return $listeOfActiveStations;
	}

	function nbActiveStations($listeOfStations){
		return sizeof($listeOfStations);
	}

	function getName($station){
		return strtolower($station["fields"]["nom"]);
	}

	function getCommune($station){
		return strtolower($station["fields"]["commune"]);
	}
	
	function getAvailableBikes($station){
		return $station["fields"]["nbvelosdispo"];
	}

	function getAvailablePlaces($station){
		return $station["fields"]["nbplacesdispo"];
	}

	function getCoodinates($station){
		return $station["geometry"]["coordinates"];
	}

	function getX($station){
		return getCoodinates($station)[0];
	}

	function getY($station){
		return getCoodinates($station)[1];
	}

	function nameToDiv($station){
		$res = "<div class = 'name'>".getName($station)."</div>";
		echo $res;
	}

	function communeToDiv($station){
		$res = "<div class = 'commune'>".getCommune($station)."</div>";
		echo $res;
	}

	function bikesToDiv($station){
		$res = "<div class = 'bikes'>".getAvailableBikes($station)."</div>";
		echo $res;
	}

	function placesToDiv($station){
		$res = "<div class = 'places'>".getAvailablePlaces($station)."</div>";
		echo $res;
	}

	function stationToDiv($station){
		echo "<div data-geo='[".getY($station).",".getX($station)."]' class= 'station'>";
		nameToDiv($station);
		communeToDiv($station);
		bikesToDiv($station);
		placesToDiv($station);
		echo "</div>";
	}


 ?>
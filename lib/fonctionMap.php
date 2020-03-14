<?php 

	function creatMap(){
		echo "let maCarte = L.map('carte_campus');"
	 	echo "fullscreenControl: true;"
	 	echo " L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
	    attribution: '©️ OpenStreetMap contributors'
	  }).addTo(maCarte);";
	}
	// 50.63698,3.071009
	function setView($x, $y){
		echo "maCarte.setView([".$x.", ".$y."], 14);";
	}

	function

 ?>
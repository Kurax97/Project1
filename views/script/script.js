
window.addEventListener('DOMContentLoaded', ()=>{
	      // 1 : création
	  var maCarte = L.map('carte_campus');
	  fullscreenControl: true;
	  
	      // 2 : choix du fond de carte
	  /**  
	  L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
	    attribution: '©️ OpenStreetMap contributors'
	  }).addTo(maCarte);
	  */
	  L.mapbox.accessToken = 'pk.eyJ1Ijoia3VyYXgiLCJhIjoiY2s3cnB4OHo3MGV1eTNtcXQ4cmQ3cnpmaiJ9.Vbo_iqNAbIUbJ-uDnaHfow';
// Add tiles from the Mapbox Static Tiles API
// (https://docs.mapbox.com/api/maps/#static-tiles)
// Tiles are 512x512 pixels and are offset by 1 zoom level
	L.tileLayer(
    'https://api.mapbox.com/styles/v1/mapbox/streets-v11/tiles/{z}/{x}/{y}?access_token=' + L.mapbox.accessToken, {
        attribution: '© <a href="https://apps.mapbox.com/feedback/">Mapbox</a> © <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
    }).addTo(maCarte);
	  /**
	  L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={pk.eyJ1Ijoia3VyYXgiLCJhIjoiY2s3cnB4OHo3MGV1eTNtcXQ4cmQ3cnpmaiJ9.Vbo_iqNAbIUbJ-uDnaHfow}', {
    attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
    maxZoom: 18,
    id: 'mapbox/streets-v11',
    tileSize: 512,
    zoomOffset: -1,
    accessToken: 'your.mapbox.access.token'
}).addTo(maCarte);*/
	    
	      // 3 : réglage de la partie visible (centre, niveau de zoom)
	  maCarte.setView([50.63698,3.071009], 14);
	   let pointsList = [];
		  for (let item of document.getElementsByClassName("station")){
		    let nom = item.getElementsByClassName("name")[0].textContent;
		    let bikes = item.getElementsByClassName("bikes")[0].textContent;
		    let places = item.getElementsByClassName("places")[0].textContent;
		    let geoloc = JSON.parse(item.dataset.geo);
		    let image =  VliveImage.getInstance(bikes,places);
		    let marker = L.marker(geoloc, {icon:image.getLeafletIcon()}).addTo(maCarte).bindPopup(nom);
		    pointsList.push(geoloc);
		  	setupListeners(item, marker);
		  	
		  }
		       // réglage de la partie visible
		  if (pointsList.length>0)
		    maCarte.fitBounds(pointsList); 

	


function setupListeners(item, marker){
    // item est le noeud DOM d'un élément li (donc une ville de la liste)
    // marker est le marqueur Leaflet créé pour cette même ville 
    item.addEventListener('click', ()=>{
      marker.openPopup();
      setCurrent(item);
      maCarte.setView(marker.getLatLng(),15);
    });
    marker.on("click", ()=>{
      setCurrent(item);
      maCarte.setView(marker.getLatLng(),15);
    });
}
// gestion de l'item courant
{
  let itemCourant = null;
  
  function setCurrent(item){
      if (itemCourant)
          itemCourant.classList.toggle('current');
      itemCourant = item;
      itemCourant.classList.toggle('current');  
  }
}
});


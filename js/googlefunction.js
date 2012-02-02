 function load() {
  if (GBrowserIsCompatible()){
			loadMap();
			
		}
}

function loadMap(){
    var map = new GMap2(document.getElementById("map"));
    var center= new GLatLng(51.209841,2.903395);
		map.setCenter(center, 15);
    map.addControl(new GSmallMapControl());
		//map.addControl(new GMapTypeControl());
    var marker = new GMarker(center, {draggable: false});
	  map.addOverlay(marker);
		marker.openInfoWindowHtml("<b>Instituut Sofie Collette</b><br>Lindenlaan 59<br>8400 Oostende<br><br>gsm: 0477 96 70 52<br>tel.:059 80 79 22<br><br>");
}
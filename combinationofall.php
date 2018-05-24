<!--include the header--> 
<p><?php include ('./include/header.html'); ?></p>
<html>
  <head>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">    
    <meta name="description" content="Travel website">
	<meta name="keywords" content="travel, trip plan">
  	<meta name="author" content="CSC 350 Team">
    <title>Your Trip | Welcome</title>
	<link rel="stylesheet" href="./css/header_style.css">
	<link rel="stylesheet" href="./css/footer_style.css">
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
    <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
    <title>From Info Windows to a Database: Saving User-Added Form Data</title>
    <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 100%;
		width: 100%;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
	  #floating-panel {
        position: absolute;
        top: 200px;
        left: 25%;
        z-index: 5;
        background-color: #fff;
        padding: 5px;
        border: 1px solid #999;
        text-align: center;
        font-family: 'Roboto','sans-serif';
        line-height: 30px;
        padding-left: 10px;
      }
    </style>
	
  </head>
  <body>
	<input type='text' id='location_id'/>
	<input type='text' id='travel_date'/>
	<input type='text' id='travel_time'/>
	<div id="floating-panel">
      <input onclick="clearMarkers();" type=button value="Hide Markers">
      <input onclick="showMarkers();" type=button value="Show All Markers">
    </div>
	<div id="form">
      <table>
			<tr><td>title:</td> <td><input type='text' id='title'/> </td> </tr>
			<tr><td>Search radius:</td><td><input type='text' id='radius' value='50'/> </td>	</tr>
                 <tr><td></td><td><input type='button' value='Search' onclick='searchData()'/></td>
				 <td><input type='button' value='Save' onclick='saveData()'/></td></tr>
      </table>
    </div>
    <p>Click on the map search for places already in the database. Search radius is</p>

    <div id="map"  style="width:50%;height:400px;"></div>
    <div id="message">Location saved</div>
	<div id="formEdit">
      <table>
      <tr><td>titleEdit:</td> <td><input type='text' id='titleEdit'/> </td> </tr>
	<tr><td>travelDate:</td><td><input type='text' id='travel_date'/></td></tr>
	<tr><td>travelTime:</td><td><input type='text' id='travel_time'/></td></tr>
      </table>
    </div>
    <script type="text/javascript" src="js/jquery-3.3.1.min.js" charset="utf-8"></script>
	<script>
	  
      var map;
      var marker;
	  var markers = {};
      var infowindow;
      var messagewindow;
	  var customLabel = {
        searched: {
          label: 'S'
        },
        marked: {
          label: 'M'
        }
      };
	  
	  $('#form').hide();
	  $('#formEdit').hide();
      
      function initMap() {
        var california = {lat: -33.7, lng: 151};
        map = new google.maps.Map(document.getElementById('map'), {
          center: california,
          zoom: 13
        });
		marker = new google.maps.Marker({
            position: california,
            map: map
        });
        infowindow = new google.maps.InfoWindow({
          content: document.getElementById('form')
        });
        messagewindow = new google.maps.InfoWindow({
          content: document.getElementById('message')
        });
		
        infowindow.open(map, marker);
		
        google.maps.event.addListener(map, 'click', function(event) {
          marker.setPosition(event.latLng);
          google.maps.event.addListener(marker, 'click', function() {
            infowindow.open(map, marker);
          });
        });
		
      }
      function searchData() {
        var title = escape(document.getElementById('title').value);
        var radius = escape(document.getElementById('radius').value);
        var latlng = marker.getPosition();
        var url = 'searching.php?latitude=' + latlng.lat() + '&longitude=' + latlng.lng() + '&radius=' + radius + '&title=' + title;
          var infoWindowSearch = new google.maps.InfoWindow;
          // Change this depending on the name of your PHP or XML file
          downloadUrl(url, function(data) {
            var xml = data.responseXML;
            var travel_locations = xml.documentElement.getElementsByTagName('travel_location');
            Array.prototype.forEach.call(travel_locations, function(travel_location_element) {
              var travel_location_id = travel_location_element.getAttribute('travel_location_id');
              var title = travel_location_element.getAttribute('title');
              var type = 'searched';
              var point = new google.maps.LatLng(
                  parseFloat(travel_location_element.getAttribute('latitude')),
                  parseFloat(travel_location_element.getAttribute('longitude')));
              var distance = travel_location_element.getAttribute('distance');
              var infowincontent = document.createElement('div');
				infowincontent.setAttribute("id", "infowin");
              var strong = document.createElement('strong');
              strong.textContent = title;
              infowincontent.appendChild(strong);
              
              infowincontent.appendChild(document.createElement('br'));
              var text = document.createElement('text');
              text.textContent = 'distance is' + distance;
              infowincontent.appendChild(text);
			  infowincontent.appendChild(document.createElement('br'));
				//alert('form created');
				var theform = document.createElement("FORM");
				theform.setAttribute("id", "myForm");
				var x = document.createElement("INPUT");
				x.setAttribute("type", "button");
				x.setAttribute("value", "edit");
				x.setAttribute("onclick", 'editData('+travel_location_id+')');
    			theform.appendChild(x);
				var y = document.createElement("INPUT");
				y.setAttribute("type", "button");
				y.setAttribute("value", "saveToPlan");
				y.setAttribute("onclick", 'saveToPlan('+travel_location_id+')');
    			theform.appendChild(y);
				infowincontent.appendChild(theform);
			  infowincontent.appendChild(document.createElement('br'));
				if(!(travel_location_id in markers)){
				  addMarker(point, type, travel_location_id);
				  markers[travel_location_id].addListener('click', function() {
					document.getElementById('location_id').value = travel_location_id;
					var y = document.getElementById('formEdit');
					infowincontent.appendChild(y);
					infoWindowSearch.setContent(infowincontent);
					infoWindowSearch.open(map, markers[travel_location_id]);
				  });
				}
            });
          });
      }
      function downloadUrl(url, callback) {
        var request = window.ActiveXObject ?
            new ActiveXObject('Microsoft.XMLHTTP') :
            new XMLHttpRequest;
        request.onreadystatechange = function() {
          if (request.readyState == 4) {
            request.onreadystatechange = doNothing;
            callback(request, request.status);
          }
        };
        request.open('GET', url, true);
        request.send(null);
      }
	  function downloadUrl2(url, callback) {
        var request = window.ActiveXObject ?
            new ActiveXObject('Microsoft.XMLHTTP') :
            new XMLHttpRequest;
        request.onreadystatechange = function() {
          if (request.readyState == 4) {
            request.onreadystatechange = doNothing;
            callback(request.responseText, request.status);
          }
        };
        request.open('GET', url, true);
        request.send(null);
      }
	  
	  function editData (id) {
		//alert('holy');
		//alert(id);
        var title = escape(document.getElementById('titleEdit').value);
		//alert(title);
		var url = 'googlemapseditLocation.php?id=' + id + '&title=' + title;
		downloadUrl2(url, function(data, responseCode) {
			alert('success');
          if (responseCode == 200 && data.length <= 1) {
            messagewindow.open(map, marker);
          }
        });
	  }
	  
	  function saveToPlan(id) {
		//alert('holy');
		//alert(id);
		//alert(title);
        var travel_date = escape(document.getElementById('travel_date').value);
        var travel_time = escape(document.getElementById('travel_time').value);
		var url = 'addtravellocation.php?id=' + id + '&travel_date' + travel_date + '&travel_time' + travel_time;
		downloadUrl2(url, function(data, responseCode) {
			alert('success');
          if (responseCode == 200 && data.length <= 1) {
            messagewindow.open(map, marker);
          }
        });
	  }
	  function saveData() {
        var title = escape(document.getElementById('title').value);
        var latlng = marker.getPosition();
        var url = 'googlemapsenteringlocation.php?title=' + title + '&latitude=' + latlng.lat() + '&longitude=' + latlng.lng();
        downloadUrl(url, function(data, responseCode) {
          if (responseCode == 200 && data.length <= 1) {
            infowindow.close();
            messagewindow.open(map, marker);
          }
        });
      }
      function doNothing () {
      }
	  
	  // Adds a marker to the map and push to the array.
      function addMarker(location, type, location_id) {
		var icon = customLabel[type] || {};
        var addMarkers = new google.maps.Marker({
          position: location,
          map: map,
		  label: icon.label
        });
        markers[location_id] = addMarkers;
      }
      // Sets the map on all markers in the array.
      function setMapOnAll(map) {
        for (var i in markers) {
          markers[i].setMap(map);
        }
      }
      // Removes the markers from the map, but keeps them in the array.
      function clearMarkers() {
        setMapOnAll(null);
      }
      // Shows any markers currently in the array.
      function showMarkers() {
        setMapOnAll(map);
      }
      // Deletes all markers in the array by removing references to them.
      //function deleteMarkers() {
		//alert(iterator);
		//clearMarkers();
      //}//
    </script>
	 <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCvaeSNIT6Csk3dRjLdfy4_Kw9UrY4WBlE&callback=initMap">
    </script>
  </body>
</html>
<?php include ('./include/footer.html'); ?>
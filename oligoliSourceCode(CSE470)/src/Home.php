<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->

<head>
	<meta charset="utf-8">
	<title>Oligoli.com</title>
	<meta name="description" content="">
	<meta name="author" content="">

	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!--    changed -->
    
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery-1.11.3.min.js"></script>
    
    
<!--    changed -->
    
</head>
<style type="text/css">
body{
  background-color: #DCDCDC;
  margin-left: 10px;
}
 #map-canvas {
        height: 400px;
        width:800px;
        margin: 0px;
        padding: 0px;
        border: solid 2px black
      }
      .controls {
        margin-top: 16px;
        border: 1px solid transparent;
        border-radius: 2px 0 0 2px;
        box-sizing: border-box;
        -moz-box-sizing: border-box;
        height: 32px;
        outline: none;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.3);
      }

      #pac-input {
        background-color: #fff;
        font-family: Roboto;
        font-size: 15px;
        font-weight: 300;
        margin-left: 12px;
        padding: 0 11px 0 13px;
        text-overflow: ellipsis;
        width: 400px;
      }

      #pac-input:focus {
        border-color: #4d90fe;
      }

      .pac-container {
        font-family: Roboto;
      }

      #type-selector {
        color: #fff;
        background-color: #4d90fe;
        padding: 5px 11px 0px 11px;
      }

      #type-selector label {
        font-family: Roboto;
        font-size: 13px;
        font-weight: 300;
      }
</style>


    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&signed_in=true&libraries=places"></script>

    <script>
function initialize() {
  var mapOptions = {
    center: new google.maps.LatLng(23.6849, 90.3563),
    zoom:10
  };
  var map = new google.maps.Map(document.getElementById('map-canvas'),
    mapOptions);

  var input = /** @type {HTMLInputElement} */(
      document.getElementById('pac-input'));

  var types = document.getElementById('type-selector');
  map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);
  map.controls[google.maps.ControlPosition.TOP_LEFT].push(types);

  var autocomplete = new google.maps.places.Autocomplete(input);
  autocomplete.bindTo('bounds', map);

  var infowindow = new google.maps.InfoWindow();
  var marker = new google.maps.Marker({
    map: map,
    anchorPoint: new google.maps.Point(0, -29)
  });

  google.maps.event.addListener(autocomplete, 'place_changed', function() {
    infowindow.close();
    marker.setVisible(false);
    var place = autocomplete.getPlace();
    if (!place.geometry) {
      window.alert("Autocomplete's returned place contains no geometry");
      return;
    }

    // If the place has a geometry, then present it on a map.
    if (place.geometry.viewport) {
      map.fitBounds(place.geometry.viewport);
    } else {
      map.setCenter(place.geometry.location);
      map.setZoom(17);  // Why 17? Because it looks good.
    }
    marker.setIcon(/** @type {google.maps.Icon} */({
      url: place.icon,
      size: new google.maps.Size(71, 71),
      origin: new google.maps.Point(0, 0),
      anchor: new google.maps.Point(17, 34),
      scaledSize: new google.maps.Size(35, 35)
    }));
    marker.setPosition(place.geometry.location);
    marker.setVisible(true);

    var address = '';
    if (place.address_components) {
      address = [
        (place.address_components[0] && place.address_components[0].short_name || ''),
        (place.address_components[1] && place.address_components[1].short_name || ''),
        (place.address_components[2] && place.address_components[2].short_name || '')
      ].join(' ');
    }

    infowindow.setContent('<div><strong>' + place.name + '</strong><br>' + address);
    infowindow.open(map, marker);
  });

  // Sets a listener on a radio button to change the filter type on Places
  // Autocomplete.
  function setupClickListener(id, types) {
    var radioButton = document.getElementById(id);
    google.maps.event.addDomListener(radioButton, 'click', function() {
      autocomplete.setTypes(types);
    });
  }

  setupClickListener('changetype-all', []);
  setupClickListener('changetype-address', ['address']);
  setupClickListener('changetype-establishment', ['establishment']);
  setupClickListener('changetype-geocode', ['geocode']);
}

google.maps.event.addDomListener(window, 'load', initialize);

    </script>





<body>
<div class="container" style="margin-left:100px;margin-top:20px">



<hr>
    <div class="header-bg">
    <div class="navbar-collapse collapse">
    
    <div class="navbar navbar-inverse navbar-fixed-top" id="myNavbar">
      <div class="navbar-header">
   <div style="margin-left:50px">
    <h1 style="color:white;">
   Oligoli
   </h1>
  </div>
    </div>
<div style="margin-right:50px">
        <ul class="nav navbar-nav navbar-right sm">
        <li><a href="Home.php" style="color:white;" role="button"><b>Home</b></a></li>
        <li><a href = "taskpost.php" style="color:white;" role="button "><b>Post a task</b></a></li>
        <li><a href="contact.php" style="color:white;" role="button" ><b>Contact</b></a></li>
        <li><a href="systemdashboard.php" style="color:white;" role="button"><b>DashBoard</b></a></li>
        <li><a href = "login.php" style="color:white;"><b>Login</b></a></li>       
        </li>
      </ul>
</div>
    </div>
     </div>
    </div><hr>


    <input id="pac-input" class="controls" type="text"
        placeholder="Enter a location">
   <center>
    <div id="map-canvas"></div>
    <br>
    <br>
</center>


</div>


<div  style="margin-left:100px">
  <center >
       <div class="empty" style="height:100px;">  </div>
       <h1 style="color:Blue;"> Our Top Tasker </h1>
   <div class="empty" style="height:100px;">  </div>
  </center>
  <?php
      error_reporting(E_ERROR);
          header('Cache-Control: no-cache, must-revalidate');
          header('Expires: Mon, 01 Jan 2016 00:00:00 GMT');

          // The JSON standard MIME header.
          header('Content-type: application/json');
                $con=mysql_connect("localhost","root", "");
                mysql_select_db("oligolilatest",$con);
      $query2="SELECT FirstName,LastName,Skills,image,review FROM taskerregistration ORDER BY review DESC LIMIT 3;";
      $output2=mysql_query($query2);
       while($row2=mysql_fetch_assoc($output2)){
      $fname= $row2['FirstName'];
      $lname= $row2['LastName'];
      $skill= $row2['Skills'];
      $review= $row2['review '];
      $image = $row2['image'];
      $name=$fname.' '.$lname;
      echo"<div class='col-lg-4' style='padding:2px'>
      <img src='$image' style='width:200px;height:200px'>
      <br>Name: $name<br>Skill: $skill<br>$review<br>
      </div>";
           
       }

?>
  <center >
      <div class="empty" style="height:300px;">  </div>
    <h1 style="color:Blue;"> Our Top user </h1>
     <div class="empty" style="height:100px;">  </div>
  </center>
    <?php
      error_reporting(E_ERROR);
          header('Cache-Control: no-cache, must-revalidate');
          header('Expires: Mon, 01 Jan 2016 00:00:00 GMT');

          // The JSON standard MIME header.
          header('Content-type: application/json');
                $con=mysql_connect("localhost","root", "");
                mysql_select_db("oligolilatest",$con);
      $query2="SELECT FirstName,LastName,Profession,image,review FROM customerregistration ORDER BY review DESC LIMIT 3;";
      if($output2=mysql_query($query2))
      {
       while($row2=mysql_fetch_assoc($output2)){
      $fname= $row2['FirstName'];
      $lname= $row2['LastName'];
      $skill= $row2['Profession'];
      $review= $row2['review '];
      $image = $row2['image'];
      $name=$fname.' '.$lname;
      echo"<div class='col-lg-4' style='padding:2px'>
      <img src='$image' style='width:200px;height:200px'>
      <br>Name: $name<br>Profession: $skill<br>$review
      </div>";
           
       }
     }else{
      echo mysql_error();
     }

?>
      <div class="empty" style="height:300px;">  </div>

</div>

  <div class="footer-bg">
    <div class="navbar-collapse collapse">
     <div class="navbar navbar-inverse" id="myNavbar">
      <div class="navbar-footer">
      <div class="empty">  <br> </div>
       <div class="container" style="margin-left:50px; color:#fff;">
       © 2015 OliGoli All Rights Reserved | Developed by <a href="#" style="font-weight:bolder; "> Team Hexa </a></div>
       </div>
    </div>
    </div>
    </div>
<!-- /////////////////////////////////////////////////////////////////////////////////// -->
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>		
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>	
	<script>window.jQuery || document.write('<script src="js/jquery-1.10.2.min.js"><\/script>')</script>
	<script src="js/bootstrap.min.js"></script>
<!--    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>-->
</body>
</html>

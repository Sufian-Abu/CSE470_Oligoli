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
  
}
</style>
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
        <li><a href="systemdashboard.php" style="color:white;" role="button"><b>DashBoard</b></a></li>
        <li><a href="taskergraph.php" style="color:white;" role="button"><b>taskerprogress</b></a></li>
        <li><a href="usergraph.php" style="color:white;" role="button"><b>userprogress</b></a></li> 
        <li><a href="logout.php" style="color:white;" role="button"><b>Home</b></a></li> 
        </li>
      </ul>
</div>
    </div>
     </div>
    </div><hr>



</div>

 <div class="footer-bg">
    <div class="navbar-collapse collapse">
     <div class="navbar navbar-inverse navbar-fixed-bottom" id="myNavbar">
      <div class="navbar-footer">
      <div class="empty">  <br> </div>
       <div class="container" style="margin-left:50px; color:#fff;">
       © 2015 OliGoli All Rights Reserved | Developed by <a href="#" style="font-weight:bolder; "> Team Hexa </a></div>
       </div>
    </div>
    </div>
    </div>
   </body>

</html>
<!-- /////////////////////////////////////////////////////////////////////////////////// -->
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>		
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>	
	<script>window.jQuery || document.write('<script src="js/jquery-1.10.2.min.js"><\/script>')</script>
	<script src="js/bootstrap.min.js"></script>
<!--    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>-->
<?php
error_reporting(E_ERROR);
include ("includes/fusioncharts.php");


 header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
header("Cache-Control: no-cache");
header("Pragma: no-cache");
$con=mysql_connect("localhost","root", "");
mysql_select_db("oligolilatest",$con);
?>
<html>
   <head>
  	<title>Comparison of data with other</title>
       
    <link  rel="stylesheet" type="text/css" href="css/style.css" />

  	<!-- You need to include the following JS file to render the chart.
  	When you make your own charts, make sure that the path to this JS file is correct.
  	Else, you will get JavaScript errors. -->

  	    <script type="text/javascript" src="js/fusioncharts.js"></script>
     
      
       
  </head>

   <body>
  	<?php

     	$query = "SELECT date,UserID FROM customerregistration ";
        $result = mysql_query($query);
        
        //echo "here1";
     	// If the query returns a valid response, prepare the JSON string
     	if ($result) {
        	// The `$arrData` array holds the chart attributes and data
              // echo "here11";
        	$arrData = array(
        	    "chart" => array(
                  "caption" => "Number of Customer Sign up with the date ratio",
                  "paletteColors" => "#0075c2",
                  "bgColor" => "#ffffff",
                  "borderAlpha"=> "20",
                  "canvasBorderAlpha"=> "0",
                  "usePlotGradientColor"=> "0",
                  "plotBorderAlpha"=> "10",
                  "showXAxisLine"=> "1",
                  "xAxisLineColor" => "#999999",
                  "showValues" => "0",
                  "divlineColor" => "#999999",
                  "divLineIsDashed" => "1",
                  "showAlternateHGridColor" => "0"
              	)
           	);

        	$arrData["data"] = array();
            
 
	// Push the data into the array
        	while(($row = mysql_fetch_assoc($result))) {
           	array_push($arrData["data"], array(
              	"label" => $row["date"],
              	"value" => $row["UserID"],
              
              	)
           	);
        	}

        	/*JSON Encode the data to retrieve the string containing the JSON representation of the data in the array. */
              // echo "here3";
        	$jsonEncodedData = json_encode($arrData);
            //echo $jsonEncodedData;

	/*Create an object for the column chart using the FusionCharts PHP class constructor. Syntax for the constructor is ` FusionCharts("type of chart", "unique chart id", width of the chart, height of the chart, "div id to render the chart", "data format", "data source")`. Because we are using JSON data to render the chart, the data format will be `json`. The variable `$jsonEncodeData` holds all the JSON data for the chart, and will be passed as the value for the data source parameter of the constructor.*/

        	$columnChart = new FusionCharts("column2D", "myFirstChart" , 600, 300, "chart-2", "json", $jsonEncodedData);
             
        	// Render the chart
        	$columnChart->render();
            
     	}

  	?>
<div id="chart-2"><!-- Fusion Charts will render here-->
    
       
       </div>

   </body>

</html>

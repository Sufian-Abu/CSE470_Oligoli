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

     	$query = "SELECT submitdate,PosttaskId FROM posttask ";
        $result = mysql_query($query);
        //echo "here1";
     	// If the query returns a valid response, prepare the JSON string
     	if ($result) {
        	// The `$arrData` array holds the chart attributes and data
              // echo "here11";
        	$arrData = array(
        	    "chart" => array(
                  "caption" => "Number of User and Customer in the website",
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
        	while($row = mysql_fetch_assoc($result)) {
           	array_push($arrData["data"], array(
              	"label" => $row["submitdate"],
              	"value" => $row["PosttaskId"],
              
              	)
           	);
        	}

        	/*JSON Encode the data to retrieve the string containing the JSON representation of the data in the array. */
              // echo "here3";
        	$jsonEncodedData = json_encode($arrData);
            //echo $jsonEncodedData;

	/*Create an object for the column chart using the FusionCharts PHP class constructor. Syntax for the constructor is ` FusionCharts("type of chart", "unique chart id", width of the chart, height of the chart, "div id to render the chart", "data format", "data source")`. Because we are using JSON data to render the chart, the data format will be `json`. The variable `$jsonEncodeData` holds all the JSON data for the chart, and will be passed as the value for the data source parameter of the constructor.*/

        	$columnChart = new FusionCharts("column2D", "myFirstChart" , 600, 300, "chart-3", "json", $jsonEncodedData);
             
        	// Render the chart
        	$columnChart->render();
            
     	}

  	?>
<div id="chart-3"><!-- Fusion Charts will render here-->
    
       
       </div>

   </body>

</html>

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
        <li><a href="admin.php" style="color:white;" role="button"><b>Home</b></a></li>
        <li><a href="systemdashboard.php" style="color:white;" role="button"><b>DashBoard</b></a></li>
        <li><a href = "adminlogout.php" style="color:white;"><b>Logout</b></a></li>       
        </li>
      </ul>
</div>
    </div>
     </div>
    </div><hr>



</div>


<?php
error_reporting(E_ERROR);
$con=mysql_connect("localhost","root", "");
mysql_select_db("oligolilatest",$con);
session_start();

// total number os user
$result1 = mysql_num_rows(mysql_query("SELECT * FROM customerregistration"));

//total number os tasker
$result2 = mysql_num_rows(mysql_query("SELECT * FROM taskerregistration"));

//total posted task
$result3 = mysql_num_rows(mysql_query("SELECT * FROM posttask"));

//total done task
$result4 = mysql_num_rows(mysql_query("SELECT * FROM posttask WHERE assign='done'"));
 
echo" <table style='margin-left:50px;'>
                  <tr><th width='200px'><h4><b>Number of total users</b> </h4> </th>
                      <th width='200px'><h4><b>Number of tasker</b> </h4> </th>
                      <th width='200px'><h4><b>Total posted task</b> </h4> </th>
                      <th width='200px'><h4><b>Total Done task</b> </h4> </th>
                  </tr>
                  <tr>
                  <td width='200px' align='center' >$result1</td>
                  <td width='200px' align='center' >$result2</td>
                  <td width='200px' align='center' >$result3</td>
                  <td width='200px' align='center' >$result4</td>
                  </tr>
              </table>";
        echo"<hr>";

?>


  <div class="row">
    <div class='col-lg-12'>
    
      <br><br> <br><br>
    
    <br>
    <br>
    <br>
   </div>
  </div>
<div class="row">

    <div class='col-lg-3' id="lower" style='margin-left:40px; display:block; max-height:500px;overflow-y:scroll;border:solid black;padding:2px'>

   <h2 style="color:blue;margin-left:25px;">Area covergae </h2>           
<?php
error_reporting(E_ERROR);
$con=mysql_connect("localhost","root", "");
mysql_select_db("oligolilatest",$con);
session_start();
//user area // will add a graph of area

$query5 ="SELECT Area FROM customerregistration";
//$output5=mysql_query($query5);
//$result5=mysql_num_rows(output5);

if($output5=mysql_query($query5))
    {
    echo "<h4><b>Area</b></h4>";
       while($row2=mysql_fetch_assoc($output5)){
        $area= $row2['Area'];

        echo" <table><tr><td width='200px'> <h4>$area </h4></td></tr> </table>";
    

       }  
    }
?>
    </div>

    <div class='col-lg-3' id="lower" style='margin-left:40px; display:block; max-height:500px;overflow-y:scroll;border:solid black;padding:2px'>
<h2 style="color:blue;margin-left:25px;">Our Tasker </h2>
        <?php
error_reporting(E_ERROR);
$con=mysql_connect("localhost","root", "");
mysql_select_db("oligolilatest",$con);
session_start();
// tasker skills

$query6 ="SELECT FirstName,LastName,Skills FROM taskerregistration";
//$output6=mysql_query($query6);
//$result6=mysql_num_rows(output6);

    if($output6=mysql_query($query6))
        {
        echo "<table><tr>
                        <td width='200px'><h4><b>Name</b></h4></td>
                        <td width='200px'><h4><b>Skill</b></h4></td></tr></table>";
           while($row2=mysql_fetch_assoc($output6)){

            $fname= $row2['FirstName'];
            $lname= $row2['LastName'];
            $skill= $row2['Skills'];
            $name=$fname.' '.$lname;
            echo"     <table><tr>
                        <td width='200px'><h4>$name </h4></td>
                        <td width='200px'><h4>$skill </h4></td></tr></table>";

           }  
        }

//kon tasker kto review pacce
?>
    </div>
<div class='col-lg-3' id="lower" style='margin-left:40px; display:block; max-height:500px;overflow-y:scroll;border:solid black;padding:2px'>
<h2 style="color:blue;margin-left:25px;">Tasker Review</h2>
<?php
error_reporting(E_ERROR);
$con=mysql_connect("localhost","root", "");
mysql_select_db("oligolilatest",$con);
session_start();
$query7 ="SELECT FirstName,LastName,review FROM taskerregistration";
//$output7=mysql_query($query7);
//$result7=mysql_num_rows(output7);
    if($output7=mysql_query($query7))
        {
                echo "<table><tr>
                        <td width='200px'><h4><b>Name</b></h4></td>
                        <td width='200px'><h4><b>Review</b></h4></td></tr></table>";
        while($row2=mysql_fetch_assoc($output7)){

            $fname= $row2['FirstName'];
            $lname= $row2['LastName'];
            $review= $row2['review'];
            $name=$fname.' '.$lname;
            echo" <table><tr>
                    <td width='200px'><h4>$name </h4></td>
                    <td width='200px'><h4>$review </h4></td></tr></table>";
           }  
        }


?>
    </div>
</div>

    <div style='max-height:500px;'> <br><br><br><br><br></div>


<div class='row'>
<div class='col-lg-6' id="lower" style='margin-left:40px; display:block; max-height:500px;overflow-y:scroll;border:solid black;padding:2px'>
<h2 style="color:blue;margin-left:25px;">Type Of Post </h2>
    <?php
error_reporting(E_ERROR);
$con=mysql_connect("localhost","root", "");
mysql_select_db("oligolilatest",$con);
session_start();
//kon user koto kaj post korce

$query8 ="SELECT tasktitle,UserName FROM posttask";
//$output7=mysql_query($query7);
//$result7=mysql_num_rows(output7);
    if($output8=mysql_query($query8))
        {
               echo "<table><tr>
                        <td width='500px'><h4><b>Task</b></h4></td>
                        <td width='50px'><h4><b>Name</b></h4></td></tr></table>";
        while($row2=mysql_fetch_assoc($output8)){

            $task= $row2['tasktitle'];
            $name= $row2['UserName'];
            echo"<table><tr><td width='500px'> <h4>$task </h4></td>
                      <td width='50px'  style='margin-right:40px;padding:10px'> <h4>$name </h4></td></tr></table>";
           }  
        }

?>

    </div>
</div>
    <div style='max-height:500px;'> <br><br><br><br><br></div>

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
<!-- /////////////////////////////////////////////////////////////////////////////////// -->
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>		
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>	
	<script>window.jQuery || document.write('<script src="js/jquery-1.10.2.min.js"><\/script>')</script>
	<script src="js/bootstrap.min.js"></script>
<!--    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>-->
</body>
</html>
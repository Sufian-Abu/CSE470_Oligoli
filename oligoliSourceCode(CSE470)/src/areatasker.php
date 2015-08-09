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
  margin-top: 50px;
  margin-left: 100px;
}
</style>

<body>
<!-- /////////////////////////////////////////////////////////////////////////////////// -->
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>		
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>	
	<script>window.jQuery || document.write('<script src="js/jquery-1.10.2.min.js"><\/script>')</script>
	<script src="js/bootstrap.min.js"></script>
<!--    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>-->
   <center>
    <h2> Available tasker At your location</h2>
    <br>
    <br>
  </center>
  <?php
  error_reporting(E_ERROR);
  $con=mysql_connect("localhost","root", "");
  mysql_select_db("oligolilatest",$con);
  session_start();
  $location = $_SESSION['area'];
  $skill=$_SESSION['type'];
  $title=$_SESSION['title'];
      $query2="SELECT FirstName,LastName,Username,Age,Skills,phonenumber,email,image,review FROM taskerregistration WHERE Area='$location' AND Skills='$skill'";
      if($output2=mysql_query($query2))
      {
       while($row2=mysql_fetch_assoc($output2)){
      $fname= $row2['FirstName'];
      $lname= $row2['LastName'];
      $age= $row2['Age'];
      $skill= $row2['Skills'];
      $number= $row2['phonenumber'];
      $review= $row2['review'];
      $email= $row2['email'];
      $image = $row2['image'];
      $user= $row2['Username'];
      $name=$fname.' '.$lname;
      echo"<div class='row'>
          <div class='col-lg-1'><form action='areatasker.php' method='post'>
           <input type='submit' name='user_accept_$user' value='assign'></form></div>
           <div class='col-lg-3'>
           <img src='$image' style='width:150px;height:150px'>
           </div>
          <div class='col-lg-6'>  <table>
                <tr><td width='200px'>Name : </td><td>  $name </td></tr>
                <tr><td width='200px'>Age : </td><td>  $age </td></tr>
                <tr><td width='200px'>Skils : </td><td>  $skill </td></tr>
                <tr><td width='200px'>Phone Number : </td><td>  $number </td></tr>
                <tr><td width='200px'>Email-Address : </td><td>  $email </td></tr>
                <tr><td width='200px'>Point : </td><td>  $review </td></tr>
             </table><hr></div>
           <br></div>";
      //////////////////////////////////////////////////
      if (isset($_POST['user_accept_'.$user]))
      {
        
        $query="UPDATE posttask SET assign= '$user' WHERE  tasktitle='$title'";
        if(mysql_query($query))
        {
           echo"<script>window.location.assign('dashboard.php')</script>";
        }else{
          echo mysql_error();
        }
      }
      ////////////////////////////////////////////   
       }

     }else{
      echo mysql_error();
     }
       

?>

</body>
</html>




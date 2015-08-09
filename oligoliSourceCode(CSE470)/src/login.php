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
        <li><a href="Home.php" style="color:white;" role="button"><b>Home</b></a></li>
        <li><a href = "taskpost.php" style="color:white;" role="button "><b>Post a task</b></a></li>
        <li><a href="#contact.php" style="color:white;" role="button" ><b>Contact</b></a></li>
        <li><a href="systemdashboard.php" style="color:white;" role="button"><b>DashBoard</b></a></li>
        <li><a href = "login.php" style="color:white;"><b>Login</b></a></li>       
        </li>
      </ul>
</div>
    </div>
     </div>
    </div><hr>

<div class = "row" style="margin-top:20px">

<div class= "col-md-3" align="left" style="margin-left:200px;margin-top:10px">
<p>Login to your account</p>
    
    
<form class="form-inline" action="login.php" method="POST">
 
    
  <div class="form-group">
      
    <label class="sr-only" for="exampleInputEmail3">Username</label>
    <input type="text" class="form-control" name="email" id="exampleInputEmail3" placeholder="username">
  </div>

    <br> <br>
  
    <div class="form-group">
    <label class="sr-only" for="exampleInputPassword3">Password</label>
    <input type="password" class="form-control" name="password" id="exampleInputPassword3" placeholder="Password">
  </div>
  <br>
  <div class="checkbox">
    <label>
      <input type="radio"> Remember me
    </label>
  </div>
  <br>
  <button type="submit" class="btn btn-default">Sign in</button>
    
<!--    script -->
    <script>
        localstorage.setItem('username', '<?php echo $_SESSION['usernmae'];?>');
    </script>
    
<!--    script -->
    
</form>
    
    
</div>

<div class= "col-md-5" align="center" style="margin-top:10px">
  <button type="button"  class="btn btn-default btn-lg btn-block" onclick="window.location.assign('taskersignup.php')">Sign up as a tasker</button>
<br>
<button type="button"  class="btn btn-default btn-lg btn-block" onclick="window.location.assign('Usersignup.php')">Sign up as a user</button>
<br>
</div>


</div>


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
<!-- /////////////////////////////////////////////////////////////////////////////////// -->
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>		
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>	
	<script>window.jQuery || document.write('<script src="js/jquery-1.10.2.min.js"><\/script>')</script>
	<script src="js/bootstrap.min.js"></script>
<!--    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>-->
</body>
</html>
    <?php
    error_reporting(E_ERROR);
        require 'session.php';

        header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
header("Cache-Control: no-cache");
header("Pragma: no-cache");
               $con=mysql_connect("localhost","root", "");
             mysql_select_db("oligolilatest",$con);

       $name= $_POST['email'];
       $password = $_POST['password'];
        
         if(!empty($name)&&!empty($password)){
         $query1 ="SELECT password,Username FROM customerregistration
                  WHERE Username='$name'";
         $query2="SELECT password,Username FROM taskerregistration
                  WHERE Username='$name'";
         $output1=mysql_query($query1);
         $output2=mysql_query($query2);
         $result1=mysql_num_rows($output1);
         $result2=mysql_num_rows($output2);

         if($result1==1)
         {

          while ($mama= mysql_fetch_assoc($output1)){
            $User_password =$mama['password'];
            $User_name =$mama['Username'];

            
          }
               
               if($User_password==$password)
               {
               
                $_SESSION['Username']=$User_name;
                 
                echo"<script>window.location.assign('home1.php')</script>";
              }
              else{
                session_unset();
                
               }

         }
         else
         {

          while ($mama1= mysql_fetch_assoc($output2)){
            $User_password =$mama1['password'];
            $User_name =$mama1['Username'];

            
          }
               
               if($User_password==$password)
               {
               
                $_SESSION['Username']=$User_name;
                 
                echo"<script>window.location.assign('home1.php')</script>";
              }
              else{
                session_unset();
                
               }
         }
         
       }
    
    ?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->

<head>
	<meta charset="utf-8">
	<title>Oligoli.com</title>
	<meta name="description" content="">
	<meta name="author" content="TAJUL ISLAM" >

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
        <li><a href="contact.php" style="color:white;" role="button" ><b>Contact</b></a></li>
        <li><a href="systemdashboard.php" style="color:white;" role="button"><b>DashBoard</b></a></li>
        <li><a href = "login.php" style="color:white;"><b>Login</b></a></li>       
        </li>
      </ul>
</div>
    </div>
     </div>
    </div><hr>


<div class= "col-md-9" style="margin-top:50px">
  <center>
  <h1>Sign Up</h1>
  </center>
  <br>
    
    
<!--    form start here -->
<form class="form-horizontal"  action="taskersignup.php" method="POST" enctype="multipart/form-data">
    
  <div class="form-group">
    <label for="fname" class="col-sm-2 control-label">First Name</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="fname" id="tasktitle">
    </div>
  </div>
    
  <div class="form-group">
    <label for="lanme" class="col-sm-2 control-label">Last Name</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="lname" id="description">
    </div>
  </div>
    
  <div class="form-group">
    <label for="mname" class="col-sm-2 control-label">Mother's Name</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="mname" id="amount">
    </div>
  </div>
    
 <div class="form-group">
    <label for="fname" class="col-sm-2 control-label">Father's Name</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="faname" id="amount">
    </div>
  </div>
    
     <div class="form-group">
    <label for="age" class="col-sm-2 control-label">Age</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="age" id="amount">
    </div>
    </div>

        <div class="form-group">
        <label for="image" class="col-sm-2 control-label">Upload image</label>
        <div class="col-sm-10">
        <input type="file" name="fileToUpload" id="fileToUpload">
        </div>
      </div>
    
    <div class="form-group">
        <label for="number" class="col-sm-2 control-label">Phone Number</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="number" id="number">
        </div>
    </div>

    <div class="form-group">
        <label for="email" class="col-sm-2 control-label">Email-Address</label>
        <div class="col-sm-10">
          <input type="email" class="form-control" name="email" id="email">
        </div>
    </div>

     <div class="form-group">
    <label for="nid" class="col-sm-2 control-label">NID</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="nid" id="amount">
    </div>
  </div>
    
     <div class="form-group">
    <label for="skil" class="col-sm-2 control-label">Skill</label>
        <div class="col-sm-10">
            <select class="form-control" name="skill" id="skill">
                <option value="None">Select your skill</option>
                <option value="Web developer">Web developer</option>
                <option value="IOS developer">IOS developer</option>
                <option  value="android developer">android developer</option>
                <option value="Electrician">Home Tutor</option>
            </select>       

            </div>
  </div>
    
     <div class="form-group">
    <label for="username" class="col-sm-2 control-label">User Name</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="uname" id="amount">
    </div>
  </div>
    
 <div class="form-group">
    <label for="password" class="col-sm-2 control-label">Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" name="password" id="amount">
    </div>
  </div>
    
     <div class="form-group">
    <label for="area" class="col-sm-2 control-label">Area</label>
        <div class="col-sm-10">
            <select class="form-control" name="area" id="area">
                <option value="None">Select area</option>
                <option value="Mohakhali">Mohakhali</option>
                <option value="Banani">Banani</option>
                <option  value="Gulshan">Gulshan</option>
                <option value="Uttora">Uttora</option>
                <option value="Mirpur">Mirpur</option>
            </select>       

            </div>
  </div>
    
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" name="submit" class="btn btn-default">Submit</button>
    </div>
  </div>
</form>
    
<!--    form ends here -->
</div>
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

<?php
error_reporting(E_ERROR);
$con=mysql_connect("localhost","root", "");
mysql_select_db("oligolilatest",$con);

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$mname = $_POST['mname'];
$faname = $_POST['faname'];
$age = $_POST['age'];
$nid = $_POST['nid'];
$skill = $_POST['skill'];
$uname = $_POST['uname'];
$pass = $_POST['password'];
$area = $_POST['area'];
$number = $_POST['number'];
$email = $_POST['email'];

if(isset($_POST['submit'])){

if(!empty($fname)&&!empty($lname)&&!empty($mname)&&!empty($faname)&&!empty($age)&&!empty($nid)&&!empty($uname)&&!empty($pass)&&!empty($area)&&!empty($number)&&!empty($email))
{
  $target_dir = "uploads/";
  $target_file1 = $target_dir . basename($_FILES["fileToUpload"]["name"]);
  $uploadOk = 1;
  $imageFileType = pathinfo($target_file1,PATHINFO_EXTENSION);

  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
      if($check !== false) {
          $uploadOk = 1;
      } else {
          echo "<script>alert('File is not an image.')</script>";
          $uploadOk = 0;
      }

  if (file_exists($target_file1)) {
      echo "<script>alert('Sorry, file already exists.')</script>";
      $uploadOk = 0;
  }

  if ($_FILES["fileToUpload"]["size"] > 500000) {
      echo "<script>alert('Sorry, your file is too large.')</script>";
      $uploadOk = 0;
  }


  if ($uploadOk == 0) {
      echo "<script>alert('Sorry, your file was not uploaded.')</script>";

     } else {
      if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file1)) {
    $now_date = date("Y-m-d");

    $query="INSERT INTO taskerregistration(FirstName, LastName, MothersName, FathersName, Age, NID,Skills ,Username, password, Area,review,phonenumber,email,image,date) 
    VALUES('$fname','$lname', '$mname', '$faname' ,'$age','$nid','$skill','$uname','$pass', '$area','10','$number','$email','$target_file1','$now_date');";
    
    if(mysql_query($query))
    {
      echo"<script>window.location.assign('Home.php')</script>";  
    }
    else
    {
        
        echo mysql_error();
    }
  }
  }
    
}
else
{
  echo"<script>alert('please fill up completely')</script>";
}
}
?>


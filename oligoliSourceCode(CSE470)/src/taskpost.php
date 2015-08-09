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
      <script src="js/jquery-1.11.3.min.js"></script>-->
      <!--    changed -->
  <link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet" type="text/css"/>
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
  <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>
  
  <script>
  $(document).ready(function() {
    $("#datepicker").datepicker();
  });
  </script>
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
              <li><a href="home1.php" style="color:white;" role="button"><b>Home</b></a></li>
              <li><a href = "taskpost.php" style="color:white;" role="button "><b>Post a task</b></a></li>
              <li><a href="dashboard.php" style="color:white;" role="button" ><b>My Profile</b></a></li>
              <li><a href="contact.php" style="color:white;" role="button" ><b>Contact</b></a></li>
                  <li><a href="systemdashboard.php" style="color:white;" role="button"><b>DashBoard</b></a></li>
              <li><a href = "logout.php" style="color:white;"><b>Logout</b></a></li>       
              </li>
            </ul>
      </div>
          </div>
           </div>
          </div><hr>

      <div class= "col-md-9" style="margin-top:50px">
        <center>
        <h1>Task Information</h1>
        </center>
        <br>

      <form class="form-horizontal"  action="taskpost.php" method="POST">


          <div class="form-group" method="POST">
          <label for="tasktitle" class="col-sm-2 control-label">Task Title</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="title" id="title">
          </div>
          </div>

          <div class="form-group">
          <label for="description" class="col-sm-2 control-label">Task Description</label>
          <div class="col-sm-10">
            <textarea class="form-control" rows="3" name="description" id="description"></textarea>
          </div>
          </div>


          <div class="form-group">
          <label for="location" class="col-sm-2 control-label">Deadline Date</label>
          <div class="col-sm-3">
          <select class="form-control" id="day_dropDown" name="day" >
                          <option value="---">Day</option>
                          <option value="01">01</option>
                          <option value="02">02</option>
                          <option value="03">03</option>
                          <option value="04">04</option>
                          <option value="05">05</option>
                          <option value="06">06</option>
                          <option value="07">07</option>
                          <option value="08">08</option>
                          <option value="09">09</option>
                          <option value="10">10</option>
                          <option value="11">11</option>
                          <option value="12">12</option>
                          <option value="13">13</option>
                          <option value="14">14</option>
                          <option value="15">15</option>
                          <option value="16">16</option>
                          <option value="17">17</option>
                          <option value="18">18</option>
                          <option value="19">19</option>
                          <option value="20">20</option>
                          <option value="21">21</option>
                          <option value="22">22</option>
                          <option value="23">23</option>
                          <option value="24">24</option>
                          <option value="25">25</option>
                          <option value="26">26</option>
                          <option value="27">27</option>
                          <option value="28">28</option>
                          <option value="29">29</option>
                          <option value="30">30</option>
                          <option value="31">31</option>
            </select>
                </select>
              </div>
        
          <div class="col-sm-3">
        <select class="form-control" id="month_dropDown" name="month" placeholder="">
                          <option value="---">Month</option>
                          <option value="01">01</option>
                          <option value="02">02</option>
                          <option value="03">03</option>
                          <option value="04">04</option>
                          <option value="05">05</option>
                          <option value="06">06</option>
                          <option value="07">07</option>
                          <option value="08">08</option>
                          <option value="09">09</option>
                          <option value="10">10</option>
                          <option value="11">11</option>
                          <option value="12">12</option>
       </select>
       </div>
         <div class="col-sm-3">
        <select class="form-control" id="year_dropDown" name="year" >
                          <option value="---">Year</option>
                          <option value="2014">2014</option>
                          <option value="2015">2015</option>
                          <option value="2016">2016</option>
        </select>

      </div>  
    </div>
          <div class="form-group">
          <label for="location" class="col-sm-2 control-label">Location</label>
          <div class="col-sm-10">
              <select class="form-control" name="location" id="location">
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
          <label for="location" class="col-sm-2 control-label">Choose Tasker Type</label>
          <div class="col-sm-10">
              <select class="form-control" name="tasker" id="tasker">
                  <option value="None">Select tasker type</option>
                  <option value="Web developer">Web developer</option>
                  <option value="IOS developer">IOS developer</option>
                  <option  value="android developer">android developer</option>
                  <option value="Electrician">Electrician</option>
                  <option value="Washer">Washer</option>
              </select>       

              </div>
          </div>


          <div class="form-group">

              <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" id="submit" name="submit" class="btn btn-default">Post</button>
              </div>
          </div>
      </form>
      </div>

      </div>
 <div class="empty" style="height:100px;">  </div>
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
          header('Cache-Control: no-cache, must-revalidate');
          header('Expires: Mon, 01 Jan 2016 00:00:00 GMT');

          // The JSON standard MIME header.
          header('Content-type: application/json');
                $con=mysql_connect("localhost","root", "");
                mysql_select_db("oligolilatest",$con);
            session_start();
        $username= $_SESSION['Username'];
        if(!empty($username))
        {
        if(isset($_POST['submit']))
        {
            $title = $_POST['title'];
            $desc = $_POST['description'];
            $location = $_POST['location'];
            $tasker = $_POST['tasker']; 
            $day = $_POST['day'];
            $month = $_POST['month'];
            $year = $_POST['year'];
            $my_date = $year."-".$month."-".$day;
            $now_date = date("Y-m-d");
    
       if(!empty($title)&&!empty($desc)&&!empty($location)&&!empty($tasker)&&!empty($my_date))
       {

       $_SESSION['area']=$location;
       $_SESSION['type']=$tasker;
       $_SESSION['title']=$title;
      $query="INSERT INTO posttask(tasktitle,taskdescription,location,Username,tasker,submitdate,postdate,CustomerRegistration_UserName)
       VALUES('$title','$desc','$location','$username','$tasker','$my_date','$now_date','$username');";     
      if(mysql_query($query))
      {
        echo"<script>window.location.assign('areatasker.php')</script>";
      }else{
        echo mysql_error();
      }
       }else{
        echo"<script>alert('fill form correctly')</script>";
       }
       }
       }else{
        echo"<script>window.location.assign('login.php')</script>";
       }

  ?>
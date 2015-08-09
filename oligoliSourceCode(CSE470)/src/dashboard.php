
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
          <li><a href="home1.php" style="color:white;" role="button"><b>Home</b></a></li>
          <li><a href="dashboard.php" style="color:white;" role="button"><b>My Profile</b></a></li>
          <li><a href = "taskpost.php" style="color:white;" role="button "><b>Post a task</b></a></li>
          <li><a href="contact.php" style="color:white;" role="button" ><b>Contact</b></a></li>
              <li><a href="systemdashboard.php" style="color:white;" role="button"><b>DashBoard</b></a></li>
          <li><a href = "logout.php" style="color:white;"><b>Logout</b></a></li>       
          </li>
        </ul>
  </div>
      </div>
       </div>
      </div><hr>  

  <div class="row">
  <?php
    error_reporting(E_ERROR);
    $con=mysql_connect("localhost","root", "");
    mysql_select_db("oligolilatest",$con);
    session_start();
    $username=$_SESSION['Username'];
    $query3="SELECT FirstName,LastName,Age,Profession,image,phonenumber,email,review FROM customerregistration WHERE Username='$username'";
    $query4="SELECT FirstName,LastName,Age,phonenumber,email,review,Skills,image 
             FROM taskerregistration WHERE Username='$username'";
    if($output3=mysql_query($query3))
    {
      echo mysql_error();
    }
    if($output4=mysql_query($query4))
    {
      echo mysql_error();
    }
    $result3=mysql_num_rows($output3);
    $result4=mysql_num_rows($output4);
    if($result3==1)
    {
       while($row3=mysql_fetch_assoc($output3)){
        $fname= $row3['FirstName'];
        $lname= $row3['LastName'];
        $age= $row3['Age'];
        $profession= $row3['Profession'];
        $image = $row3['image'];
        $name=$fname.' '.$lname;
        $number=$row3['phonenumber'];
        $email=$row3['email'];
        $review=$row3['review'];
        echo"<div class='col-lg-3' style='border:solid black;padding:2px'>
        <img src='$image' style='width:270px;height:250px'>
        </div>";
        echo" <div class='col-lg-8' style='margin-left:30px;'>  <table>
                  <tr><td width='200px'><h3>Name </h3> </td><td> <h4> $name </h4></td></tr>
                  <tr><td width='200px'><h3>Age </h3> </td><td><h4>  $age </h4></td></tr>
                  <tr><td width='200px'><h3>profession</h3></td><td> <h4> $profession </h4></td></tr>
                  <tr><td width='200px'><h3>Phone Number </h3> </td><td> <h4> $number </h4></td></tr>
                  <tr><td width='200px'><h3>Email-Address</h3> </td><td><h4>  $email </h4></td></tr>
                  <tr><td width='200px'><h3>Point </h3> </td><td><h4>  $review </h4></td></tr>
              </div> </table>";
       }
    }

    else if($result4==1)
    {
     
     while($row4=mysql_fetch_assoc($output4)){
        $fname= $row4['FirstName'];
        $lname= $row4['LastName'];
        $age= $row4['Age'];
        $skills= $row4['Skills'];
        $image = $row4['image'];
        $name=$fname.' '.$lname;
        $number=$row4['phonenumber'];
        $email=$row4['email'];
        $review=$row4['review'];
        echo"<div class='col-lg-3' style='border:solid black;padding:2px'>
        <img src='$image' style='width:270px;height:250px'>
        </div>";
        echo" <div class='col-lg-8'style='margin-left:30px;'>  <table>
                  <tr><td width='200px'><h3>Name </h3> </td><td><h4>  $name </h4></td></tr>
                  <tr><td width='200px'><h3>Age </h3> </td><td><h4>  $age </h4></td></tr>
                  <tr><td width='200px'><h3>Skills </h3> </td><td> <h4> $skills </h4></td></tr>
                  <tr><td width='200px'><h3>Phone Number </h3> </td><td><h4>  $number </h4></td></tr>
                  <tr><td width='200px'><h3>Email-Address </h3> </td><td> <h4> $email </h4></td></tr>
                  <tr><td width='200px'><h3>Point </h3> </td><td> <h4> $review </h4></td></tr>
               </table></div>";
         
       }

    }

    else
    {
      echo "You do not have any information";
    }
  ?>
  </div>

  <div class="row">
   <div class="row"> </div>
    
    <div class='col-lg-12'>
      <br><br> <br><br>
    <h2 style="color:blue;margin-left:25px;"> See Your Activites </h2>
    <br>
    <br>
    <br>

   </div>
  </div>

  <div class="row">
  <div class='col-lg-12' style='margin-left:40px; max-height:500px;overflow-y:scroll;border:solid black;padding:2px'>

    <?php
    error_reporting(E_ERROR);
    $con=mysql_connect("localhost","root", "");
    mysql_select_db("oligolilatest",$con);
    session_start();
    $username=$_SESSION['Username'];
    $query3="SELECT FirstName,LastName,Age,Profession,image,phonenumber,email,review FROM customerregistration WHERE Username='$username'";
    $query4="SELECT FirstName,LastName,Age,phonenumber,email,review,Skills,image 
             FROM taskerregistration WHERE Username='$username'";
    if($output3=mysql_query($query3))
    {
      echo mysql_error();
    }
    if($output4=mysql_query($query4))
    {
      echo mysql_error();
    }
    $result3=mysql_num_rows($output3);
    $result4=mysql_num_rows($output4);
    if($result3==1){
    echo "<center><h2>Work Timeline</h2></center>";
    $query2="SELECT tasktitle,taskdescription,location,assign,posttaskid,tasker,postdate,submitdate FROM posttask WHERE Username='$username'";
    if($output2=mysql_query($query2))
    {
       while($row2=mysql_fetch_assoc($output2)){
        $title= $row2['tasktitle'];
        $des= $row2['taskdescription'];
        $loc=$row2['location'];
        $assign=$row2['assign'];
        $id=$row2['posttaskid'];
        $tasker=$row2['tasker'];
        $postdate=$row2['postdate'];
        $submitdate=$row2['submitdate'];
        //echo $title."<br>".$des."<br>".$loc."<br>".$method."<br>".$amount."<br>
        if($assign=="reject"){
        echo" <table style='margin-left:50px;'>
                  <tr><td width='200px'><h4><b>Task Ttile</b> </h4> </td><td> <h4>$title </h4></td></tr>
                  <tr><td width='200px'><h4><b>Task Description </b></h4> </td><td><h4>  $des </h4></td></tr>
                  <tr><td width='200px'><h4><b>Location </b></h4> </td><td><h4>  $loc </h4></td></tr>
                  <tr><td width='200px'><h4><b>Post Date: </b></h4> </td><td><h4>  $postdate </h4></td></tr>
                  <tr><td width='200px'><h4><b>Deadline </b></h4> </td><td><h4>  $submitdate </h4></td></tr>
                  <tr><td><form action='dashboard.php' method='post'>
                  <button type='submit' name='user_assign_$id' class='btn btn-success'>
                  <span class='glyphicon glyphicon-thumbs-up'></span> Assign
                 </button></form></td></tr>
              </table>";
        echo"<hr>";
        /////////////////////////////////////
        if (isset($_POST['user_assign_'.$id]))
        {
        session_start();
        $_SESSION['area']=$loc;
        $_SESSION['type']=$tasker;
        $_SESSION['title']=$title;
        echo"<script>window.location.assign('areatasker.php')</script>";
        }
        ////////////////////////////////////

       }else{
              echo" <table style='margin-left:50px;'>
                  <tr><td width='200px'><h4><b>Task Ttile</b> </h4> </td><td> <h4>$title </h4></td></tr>
                  <tr><td width='200px'><h4><b>Task Description </b></h4> </td><td><h4>  $des </h4></td></tr>
                  <tr><td width='200px'><h4><b>Location </b></h4> </td><td><h4>  $loc </h4></td></tr>
                  <tr><td width='200px'><h4><b>Post Date </b></h4> </td><td><h4>  $postdate </h4></td></tr>
                  <tr><td width='200px'><h4><b>Deadline </b></h4> </td><td><h4>  $submitdate </h4></td></tr>
              </table>";
        echo"<hr>";
       }
       }
    }else{
     echo  mysql_error();
    }
    }
    if($result4==1){
    echo "<center><h2>Assign Work Timeline</h2></center>";
    $query2="SELECT tasktitle,taskdescription,posttaskid,location,postdate,submitdate FROM posttask WHERE assign='$username'";
    if($output2=mysql_query($query2))
    {
       while($row2=mysql_fetch_assoc($output2)){
        $title= $row2['tasktitle'];
        $des= $row2['taskdescription'];
        $loc=$row2['location'];
        $id=$row2['posttaskid'];
        $postdate=$row2['postdate'];
        $submitdate=$row2['submitdate'];
        echo" <table style='margin-left:50px;'>
                  <tr><td width='200px'><h4><b>Task Ttile</b> </h4> </td><td> <h4>$title </h4></td></tr>
                  <tr><td width='200px'><h4><b>Task Description </b></h4> </td><td><h4>  $des </h4></td></tr>
                  <tr><td width='200px'><h4><b>Location </b></h4> </td><td><h4>  $loc </h4></td></tr>
                  <tr><td width='200px'><h4><b>Post Date: </b></h4> </td><td><h4>  $postdate </h4></td></tr>
                  <tr><td width='200px'><h4><b>Deadline </b></h4> </td><td><h4>  $submitdate </h4></td></tr>
                  <tr><td><form action='dashboard.php' method='post'>
                  <button type='submit' name='user_accept_$id' class='btn btn-success'>
                  <span class='glyphicon glyphicon-thumbs-up'></span> Accept
                 </button></form></td>
                  <td><form action='dashboard.php' method='post'><button type='submit' name='user_reject_$id' class='btn btn-danger'>
                   <span class='glyphicon glyphicon-thumbs-down'></span> Reject
                 </button></form></td></tr>
              </table>";
        echo"<hr>";
    /////////////////////////////////////////////////////////////////
        if (isset($_POST['user_accept_'.$id]))
        {
           $query="UPDATE posttask SET accept='$username' WHERE posttaskid='$id'";
           if(mysql_query($query))
           {
            $query="UPDATE posttask SET assign='done' WHERE posttaskid='$id'";
            if(mysql_query($query))
            {
           echo"<script>window.location.assign('dashboard.php')</script>";
            }
           }else{
            echo mysql_error();
           }
          
        }else if(isset($_POST['user_reject_'.$id])){
           $query="UPDATE posttask SET assign= 'reject' WHERE posttaskid='$id'";
           if(mysql_query($query))
           {
            echo"<script>window.location.assign('dashboard.php')</script>";
           }else{
            echo mysql_error();
           }
        }else{

        }
    //////////////////////////////////////////////////////////////////
       }
    }else{
     echo  mysql_error();
    }

     }
    ?>
   </div>
  </div>
  <!--////////////////////////////////////////////////////////////////////-->
  <div class="empty" style="height:50px;">  </div>
  <!-- feedback panel/////////////////////////////////////////////////////////////////////////-->
  <div class="row">
    <div class='col-lg-12'>
    
      <br><br> <br><br>
    <h2 style="color:blue;margin-left:25px;"> Feedback </h2>
    <br>
    <br>
    <br>
   </div>
  </div>

  <div class="row">
  <div class='col-lg-12' style='margin-left:40px; max-height:500px;overflow-y:scroll;border:solid black;padding:2px'>

    <?php
    error_reporting(E_ERROR);
    $con=mysql_connect("localhost","root", "");
    mysql_select_db("oligolilatest",$con);
    session_start();
    $username=$_SESSION['Username'];
    $query3="SELECT FirstName,LastName,Age,Profession,image,phonenumber,email,review FROM customerregistration WHERE Username='$username'";
    $query4="SELECT FirstName,LastName,Age,phonenumber,email,review,Skills,image 
             FROM taskerregistration WHERE Username='$username'";
    if($output3=mysql_query($query3))
    {
      echo mysql_error();
    }
    if($output4=mysql_query($query4))
    {
      echo mysql_error();
    }
    $result3=mysql_num_rows($output3);
    $result4=mysql_num_rows($output4);
    if($result3==1){
     echo "<center><h2>give feedback to tasker </h2></center>";
     $query="SELECT tasktitle,taskdescription,posttaskid,taskerfeedback,taskercomment,accept FROM posttask WHERE Username='$username'"; 
     if($output2=mysql_query($query))
     {
      while($row2=mysql_fetch_assoc($output2)){
        $title= $row2['tasktitle'];
        $des= $row2['taskdescription'];
        $accept=$row2['accept'];
        $id=$row2['posttaskid'];
        $feedback=$row2['taskerfeedback'];
        $comment=$row2['taskercomment'];
        if(($feedback!="done")&&($accept!="")&&($comment==""))
        {
        echo" <table style='margin-left:50px;'>
                  <tr><td width='200px'><h4><b> Task Ttile </b></h4> </td><td> <h4> $title </h4></td></tr>
                  <tr><td width='200px'><h4><b>Task Description </b></h4> </td><td><h4>  $des</h4> </td></tr>
                  <tr><td width='200px'><h4><b>Tasker Name </b></h4> </td><td><h4>  $accept </h4></td></tr>
                  <tr><td><form action='dashboard.php' method='post'>
                  <button type='submit' name='user_like_$id' class='btn btn-success'>
                  <span class='glyphicon glyphicon-thumbs-up'></span> Like
                  </button></td>
                  <td><button type='submit' name='user_dislike_$id' class='btn btn-danger'>
                  <span class='glyphicon glyphicon-thumbs-down'></span> Dislike
                  </button></td></tr>
                  <tr><td> <br><br> </td></tr>
                 <tr><td><textarea type='text' name='user_comment_$id' rows='3' placeholder='Give comment about service' style='width:300px;'></textarea><br><br>
                 <button type='submit' class='btn btn-primary'>Submit</button></td>
                 </form></tr>
                  </table>
                  <br>
                 ";
        echo"<hr>";
        }
        if (isset($_POST['user_like_'.$id]))
        {
          $query2="SELECT accept,posttaskid FROM posttask WHERE posttaskid='$id'";
          if($output2=mysql_query($query2))
          {
            while($row2=mysql_fetch_assoc($output2))
            {
              $accept=$row2['accept'];
              $id= $row2['posttaskid'];
          $query="UPDATE posttask SET taskerfeedback= 'done' WHERE  accept='$accept' AND posttaskid='$id'";
          if(mysql_query($query))
          {
            $query2="SELECT review FROM taskerregistration WHERE Username='$accept'";
            if($output2=mysql_query($query2))
            {
              while($row2=mysql_fetch_assoc($output2))
              {
            $review=$row2['review'];
            $review=$review+1;
            $query="UPDATE taskerregistration SET review= '$review' WHERE  Username='$accept'";
            if(mysql_query($query))
            {
              echo"<script>window.location.assign('dashboard.php')</script>";
            }else{
                echo mysql_error();
              }
              }

            }
          }else{
              echo mysql_error();
            }
          }
          }else{
            mysql_error();
          }

        }else if(isset($_POST['user_dislike_'.$id])){
          $query2="SELECT accept,posttaskid FROM posttask WHERE posttaskid='$id'";
          if($output2=mysql_query($query2))
          {
            while($row2=mysql_fetch_assoc($output2))
            {
              $accept=$row2['accept'];
              $id= $row2['posttaskid'];
          $query="UPDATE posttask SET taskerfeedback= 'done' WHERE  accept='$accept' AND posttaskid='$id'";
          if(mysql_query($query))
          {
            $query2="SELECT review FROM taskerregistration WHERE Username='$accept'";
            if($output2=mysql_query($query2))
            {
              while($row2=mysql_fetch_assoc($output2))
              {
            $review=$row2['review'];
            $review=$review-1;
            $query="UPDATE taskerregistration SET review= '$review' WHERE  Username='$accept'";
            if(mysql_query($query))
            {
              echo"<script>window.location.assign('dashboard.php')</script>";
            }else{
                echo mysql_error();
              }
              }

            }
          }else{
              echo mysql_error();
            }
          }
          }else{
            mysql_error();
          }
        }else{}

    /////////////////////////////////////////////////////
        if (isset($_POST['user_comment_'.$id]))
        {
         $go=$_POST['user_comment_'.$id];
         if(!empty($go))
         {
         $query="UPDATE posttask SET taskercomment= '$go' WHERE  posttaskid='$id'";
         if(mysql_query($query))
        {
         echo"<script>window.location.assign('dashboard.php')</script>";
        }else{
          echo mysql_error();
        }
         }
        }
  ///////////////////////////////////////////////////////////

     }
     }else{
      echo mysql_error();
     }
    }
    ////////////////////feedback system for tasker////////////////////
  if($result4==1){
     echo "<center><h2>give feedback to User </h2></center>";
     $query="SELECT tasktitle,taskdescription,posttaskid,userfeedback,usercomment,Username FROM posttask WHERE accept='$username'"; 
     if($output2=mysql_query($query))
     {
      while($row2=mysql_fetch_assoc($output2)){
        $title= $row2['tasktitle'];
        $des= $row2['taskdescription'];
        $accept=$row2['Username'];
        $id=$row2['posttaskid'];
        $feedback=$row2['userfeedback'];
        $comment=$row2['usercomment'];
        if($feedback!="done")
        {
        echo" <table style='margin-left:50px;'>
                  <tr><td width='200px'><h4><b> Task Ttile </b></h4> </td><td> <h4> $title </h4></td></tr>
                  <tr><td width='200px'><h4><b>Task Description </b></h4> </td><td><h4>  $des</h4> </td></tr>
                  <tr><td width='200px'><h4><b>User Name </b></h4> </td><td><h4>  $accept </h4></td></tr>
                  <tr><td><form action='dashboard.php' method='post'>
                  <button type='submit' name='user_like_$id' class='btn btn-success'>
                  <span class='glyphicon glyphicon-thumbs-up'></span> Like
                  </button></td>
                  <td><button type='submit' name='user_dislike_$id' class='btn btn-danger'>
                  <span class='glyphicon glyphicon-thumbs-down'></span> Dislike
                  </button></td></tr>
                  <tr><td> <br><br> </td></tr>
                 <tr><td><textarea type='text' name='user_comment_$id' rows='3' placeholder='Give comment about service' style='width:300px;'></textarea><br><br>
                 <button type='submit' class='btn btn-primary'>Submit</button></td>
                 </form></tr>
                  </table>
                  <br>
                 ";
        echo"<hr>";
        }
        if (isset($_POST['user_like_'.$id]))
        {
          $query2="SELECT Username,posttaskid FROM posttask WHERE posttaskid='$id'";
          if($output2=mysql_query($query2))
          {
            while($row2=mysql_fetch_assoc($output2))
            {
              $accept=$row2['Username'];
              $id= $row2['posttaskid'];
          $query="UPDATE posttask SET userfeedback= 'done' WHERE  posttaskid='$id'";
          if(mysql_query($query))
          {
            $query2="SELECT review FROM customerregistration WHERE Username='$accept'";
            if($output2=mysql_query($query2))
            {
              while($row2=mysql_fetch_assoc($output2))
              {
            $review=$row2['review'];
            $review=$review+1;
            $query="UPDATE customerregistration SET review= '$review' WHERE  Username='$accept'";
            if(mysql_query($query))
            {
              echo"<script>window.location.assign('dashboard.php')</script>";
            }else{
                echo mysql_error();
              }
              }

            }
          }else{
              echo mysql_error();
            }
          }
          }else{
            mysql_error();
          }

        }else if(isset($_POST['user_dislike_'.$id])){
          $query2="SELECT Username,posttaskid FROM posttask WHERE posttaskid='$id'";
          if($output2=mysql_query($query2))
          {
            while($row2=mysql_fetch_assoc($output2))
            {
              $accept=$row2['Username '];
              $id= $row2['posttaskid'];
          $query="UPDATE posttask SET feedback= 'done' WHERE  accept='$accept' AND posttaskid='$id'";
          if(mysql_query($query))
          {
            $query2="SELECT review FROM taskerregistration WHERE Username='$accept'";
            if($output2=mysql_query($query2))
            {
              while($row2=mysql_fetch_assoc($output2))
              {
            $review=$row2['review'];
            $review=$review-1;
            $query="UPDATE taskerregistration SET review= '$review' WHERE  Username='$accept'";
            if(mysql_query($query))
            {
              echo"<script>window.location.assign('dashboard.php')</script>";
            }else{
                echo mysql_error();
              }
              }

            }
          }else{
              echo mysql_error();
            }
          }
          }else{
            mysql_error();
          }
        }else{}

    /////////////////////////////////////////////////////
        if (isset($_POST['user_comment_'.$id]))
        {
         $go=$_POST['user_comment_'.$id];
         if(!empty($go))
         {
         $query="UPDATE posttask SET usercomment= '$go' WHERE  posttaskid='$id'";
         if(mysql_query($query))
        {
         echo"<script>window.location.assign('dashboard.php')</script>";
        }else{
          echo mysql_error();
        }
         }
        }
  ///////////////////////////////////////////////////////////

          
      }
     }else{
      echo mysql_error();
     }
   }
    ?>

  </div>

  </div>


  <!--////////////////////handshaking////////////////////////////////////////////////-->

  <div class="empty" style="height:200px;">  </div>

  <div class="row">
  <div class='col-lg-12' id="lower" style='margin-left:40px; display:block; max-height:500px;overflow-y:scroll;border:solid black;padding:2px'>

    <?php
    error_reporting(E_ERROR);
    $con=mysql_connect("localhost","root", "");
    mysql_select_db("oligolilatest",$con);
    session_start();
    $username=$_SESSION['Username'];
    $query3="SELECT FirstName,LastName,Age,Profession,image,phonenumber,email,review FROM customerregistration WHERE Username='$username'";
    $query4="SELECT FirstName,LastName,Age,phonenumber,email,review,Skills,image 
             FROM taskerregistration WHERE Username='$username'";
    if($output3=mysql_query($query3))
    {
      echo mysql_error();
    }
    if($output4=mysql_query($query4))
    {
      echo mysql_error();
    }
    $result3=mysql_num_rows($output3);
    $result4=mysql_num_rows($output4);
    if($result4==1)
    {
    echo "<center><h2>Accepted Work Timeline</h2></center>";
    $query2="SELECT tasktitle,taskdescription,posttaskid,location,submitdate FROM posttask WHERE accept='$username'";
    if($output2=mysql_query($query2))
    {
       while($row2=mysql_fetch_assoc($output2)){
        $title= $row2['tasktitle'];
        $des= $row2['taskdescription'];
        $loc=$row2['location'];
        $submitdate=$row2['submitdate'];
        echo" <table style='margin-left:50px;'>
                  <tr><td width='200px'><h4><b>Task Ttile</b> </h4> </td><td> <h4>$title </h4></td></tr>
                  <tr><td width='200px'><h4><b>Task Description </b></h4> </td><td><h4>  $des </h4></td></tr>
                  <tr><td width='200px'><h4><b>Location </b></h4> </td><td><h4>  $loc </h4></td></tr>
                  <tr><td width='200px'><h4><b>Deadline </b></h4> </td><td><h4>  $submitdate </h4></td></tr>
              </table>";
        echo"<hr>";

       }  
    }
    if($result3==1)
    {
      echo "<script>document.getElementById(lower).style.display = 'none'</script>";
    }
    }
    ?>

  </div>
  </div>

  </div>
   <div class="empty" style="height:100px;">  </div>

  </body>
  </html>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>HOME-Welcome</title>
    <link rel="stylesheet" href="erp.css">
    <style media="screen">
      #bg {
        margin-top: -25%;
      }
      .student_nav {
        margin-top: -70px;
      }
    </style>
  </head>
  <body>
    <?php session_start();
    if(!isset($_SESSION['roll']))
    header('location:http://localhost/erp login/login.php');
    ?>
    <h1 style="background-color:#f3ca14; padding:10px;">Welcome -RKGIT Erp System</h1>
    <marquee style="margin-left:20%" width=60% direction="left";>
      <p style="color:#FF3031;"><b>NOTICE: Last date for submission of assignment is dd/mm/yyyy.</b></p>
    </marquee>
    <p style="margin-left: 43%;font-size:30px;font-weight:bold;">DASHBOARD</p>
    <img id='bg' src="33430copy.jpg" alt="bg">
    <div class="student_nav">
     <a class="nav" href="stud_home.php">Home</a><br>
     <a class="nav" href="stud_attendance.php">View Attendance</a><br>
     <a class="nav" href="#">View Marks</a><br>
     <a class="nav" href="#">View Time Table</a><br>
     <a class="nav" href="logout.php">Logout</a><br>
    </div>
  </body>
</html>

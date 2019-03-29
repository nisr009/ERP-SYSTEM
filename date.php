<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Attendance Entry</title>
    <link rel="stylesheet" href="erp.css">
  </head>
  <body>
    <?php
    session_start();
    if(!isset($_SESSION['user']))
    header('location:http://localhost/erp login/login.php');
     ?>
     <h1 style="background-color:#f3ca14; padding:10px;">RKGIT ERP</h1>
     <p style="margin-left: 43%;font-size:30px;font-weight:bold;">Attendance Entry</p>
     <img id='bg' src="abstract-art-black-background-1040499.jpg" alt="bg">
     <div>
      <a class="nav" href="newhome.php">Home</a><br>
      <a class="nav" href="date.php">Attendance Entry</a><br>
      <a class="nav" href="#">Marks entry</a><br>
      <a class="nav" href="attendance.php">View Attendance</a><br>
      <a class="nav" href="new_info.php">Add New Student Info.</a><br>
      <a class="nav" href="logout.php">Logout</a><br>
      </div>
      <div class=" date" style=" margin-left:43%;margin-top:-420px">
     <h2 style="color:#192A56;">Enter attendance date</h2><br>

     <form class="" action="home.php" method="post">
       <input type="date" name="date" value=0>
       <input style="border-radius:12px;padding:5px 20px;margin:5px;" type="submit" name="submit" value="submit">
     </form>

     </div>

  </body>
</html>

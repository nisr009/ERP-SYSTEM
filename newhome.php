<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>HOME-Welcome</title>
    <link rel="stylesheet" href="erp.css">
  </head>
  <body>
    <?php session_start();
    if(!isset($_SESSION['user']))
    header('location:http://localhost/erp login/login.php');
    ?>
    <h1 style="background-color:#f3ca14; padding:10px;">Welcome <?php echo $_SESSION['user']; ?> -RKGIT Erp System</h1>
    <p style="margin-left: 43%;font-size:30px;font-weight:bold;">DASHBOARD</p>
    <img id='bg' src="33430copy.jpg" alt="bg">
    <div>
     <a class="nav" href="newhome.php">Home</a><br>
     <a class="nav" href="date.php">Attendance Entry</a><br>
     <a class="nav" href="#">Marks entry</a><br>
     <a class="nav" href="attendance.php">View Attendance</a><br>
     <a class="nav" href="new_info.php">Add New Student Info.</a><br>
     <a class="nav" href="logout.php">Logout</a><br>
    </div>

  </body>
</html>

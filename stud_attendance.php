<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="erp.css">
    <style>
    #bg {
      margin-top: -25%;
    }
    .detail {
      border-collapse: collapse;
      width:55%;
      margin-left:28%;
      margin-top:-310px;

    }
    .detail tr:nth-child(even) {
      background-color: #f2f2f2
    }
    .detail th {
      font-size: 20px;
      font-family: sofia;
      height: 40px;
      background-color: #f3ca14;
      border-bottom: 1px solid #ddd;
    }
    .detail th,td {
      text-align:center;
      padding: 5px;

    }
    .student_nav {
      margin-top: -70px;
    }
    </style>
    <title>My Attendance</title>
  </head>
  <body>
    <?php
    session_start();
    if(!isset($_SESSION['roll']))
    header('location:http://localhost/erp login/login.php');
    ?>
    <h1 style="background-color:#f3ca14; padding:10px;">RKGIT ERP</h1>
    <marquee style="margin-left:20%" width=60% direction="left";>
      <p style="color:#FF3031;"><b>NOTICE: Last date for submission of assignment is dd/mm/yyyy.</b></p>
    </marquee>
    <p style="margin-left: 43%;font-size:30px;font-weight:bold;">My Attendance</p>
    <img id='bg' src="33430copy.jpg" alt="bg">
    <div class="student_nav">
     <a class="nav" href="stud_home.php">Home</a><br>
     <a class="nav" href="date.php">View Attendance</a><br>
     <a class="nav" href="#">View Marks</a><br>
     <a class="nav" href="#">View Time Table</a><br>
     <a class="nav" href="logout.php">Logout</a><br>
    </div>
    <table class='detail'>
      <tr>
        <th>NAME</th>
        <th>ROLL No</th>
        <th>PRESENT</th>
        <th>ABSENT</th>
        <th>TOTAL</th>
        <th>PERCENTAGE</th>
        <th></th>
      </tr>
    <?php
    $roll=$_SESSION['roll'];
    $con=mysqli_connect('localhost','root','','logindb');
    $q="select name,roll_no,present,absent,total,percentage from erp where roll_no='$roll'";
    $result=mysqli_query($con,$q);
    $row=mysqli_fetch_array($result);
     ?>
     <tr>
       <td> <?php echo $row['name'] ; ?> </td>
       <td> <?php echo $row['roll_no']; ?></td>
       <td> <?php echo $row['present']; ?></td>
       <td> <?php echo $row['absent']; ?></td>
       <td> <?php echo $row['total']; ?></td>
       <td> <?php echo $row['percentage']; ?></td>
       <td> || <a  target='_blank' style="text-decoration:none;" href="details.php">View Details</a> ||</td>
     </tr>
   </table>
  </body>
</html>

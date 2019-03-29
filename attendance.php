<!DOCTYPE html>
<html>
<head>
  <title>View Attendance</title>
  <link rel="stylesheet" href="erp.css">
  <style>
  .table {
    border-collapse: collapse;
    width:55%;
    margin-left:28%;
    margin-top:-410px;

  }
  .table tr:nth-child(even) {
    background-color: #f2f2f2
  }
  .table th {
    font-size: 20px;
    font-family: sofia;
    height: 40px;
    background-color: #f3ca14;
    border-bottom: 1px solid #ddd;
  }
  .table th,td {
    text-align:center;
    padding: 5px;

  }
  </style>
</head>
  <body>
<?php session_start();
if(!isset($_SESSION['user']))
header('location:http://localhost/erp login/login.php');
else {

    $con=mysqli_connect('localhost','root','','logindb');
    $q="select * from erp";
    $result=mysqli_query($con,$q);
    $num=mysqli_num_rows($result);
  ?>
  <h1 style="background-color:#f3ca14; padding:10px;">RKGIT ERP</h1>
  <p style="margin-left: 43%;font-size:30px;font-weight:bold;">View Attendance</p>
  <img id='bg' src="33430copy.jpg" alt="bg">
  <div>
   <a class="nav" href="newhome.php">Home</a><br>
   <a class="nav" href="date.php">Attendance Entry</a><br>
   <a class="nav" href="#">Marks entry</a><br>
   <a class="nav" href="attendance.php">View Attendance</a><br>
   <a class="nav" href="new_info.php">Add New Student Info.</a><br>
   <a class="nav" href="logout.php">Logout</a><br>
  </div>
  <table class='table'>
    <tr>
      <th>ID</th>
      <th>Roll No.</th>
      <th>Name</th>
      <th>Dept</th>
      <th>Present</th>
      <th>Absent</th>
      <th>Total</th>
      <th>Percentage</th>
      <th></th>
    </tr>
  <?php
for($i=1;$i<=$num;$i++)
{
  $row=mysqli_fetch_array($result);
  ?>
  <tr>
    <td><?php echo $row['id'] ?></td>
    <td><?php echo $row['roll_no'] ?></td>
    <td><?php echo $row['name'] ?></td>
    <td><?php echo $row['dept'] ?> </td>
    <td><?php echo $row['present'] ?></td>
    <td><?php echo $row['absent'] ?></td>
    <td><?php echo $row['total'] ?></td>
    <td><?php echo $row['percentage'] ?></td>
    <td>
      <form action="details.php" method="post" target="_blank">
        <input type="submit" name=<?php echo $row['id'] ?> value="View Details" >
      </form>
    </td>

  </tr>
  <?php
}}
?>
</table>

  </body>
</html>

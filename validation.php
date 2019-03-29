<?php
session_start();

$user=$_POST['user'];
$roll=$_POST['roll'];
$pass=$_POST['pass'];

$con=mysqli_connect('localhost','root','','logindb');
if(isset($user))
{
$q="select * from login where (username='$user' && password='$pass')";


$result=mysqli_query($con,$q);
if(mysqli_num_rows($result)==1)
{
  $_SESSION['user']=$user;
  header('location:http://localhost/erp login/newhome.php');
}
else {
  header('location:http://localhost/erp login/login.php');
}
}
else if(isset($roll))
{
  $q="select * from erp where roll_no=$roll and password='$pass' ";
  $result=mysqli_query($con,$q);
  $num=mysqli_num_rows($result);
  if($num == 1)
  {
    $_SESSION['roll']=$roll;
    header('location:http://localhost/erp login/stud_home.php');
  }
  else {
    header('location:http://localhost/erp login/login.php');
  }
  }

 ?>

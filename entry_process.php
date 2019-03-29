<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    session_start();
    if(!isset($_SESSION['user']))
    header('location:http://localhost/erp login/login.php');
    $con= mysqli_connect('localhost','root','','logindb');
    $roll=$_POST['roll_no'];
    $name=$_POST['name'];
    $dept=$_POST['dept'];
    $pass=$_POST['password'];
    $q="insert into erp(roll_no,name,present,absent,total,percentage,dept,password) values('$roll','$name',0,0,0,0,'$dept','$pass')";
    mysqli_query($con,$q);
     ?>
     <script>
          alert('New Student added successfully');
          window.location.href='newhome.php'
     </script>
  </body>
</html>

<!DOCTYPE html>
<html>
<body>


<?php
session_start();
//new change
//$_SESSION['date']=$_POST['date'];
if(!isset($_SESSION['user']))
header('location:http://localhost/erp login/login.php');
else if(!isset($_POST['status1']) || !isset($_POST['status2']) || !isset($_POST['status3']) || !isset($_POST['status4']))
{
  ?>
  <script>
  alert("enter details for every student");
  window.location.href='home.php';
  </script>
  <?php
}
//header('location:http://localhost/erp login/home.php');
else
{
$con=mysqli_connect('localhost','root','','logindb');
$q="select * from erp";
$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);

for($i=1;$i<=$num;$i++)
{
  $status=$_POST['status'.$i];
  $date=(string)$_SESSION['date'];
  $row=mysqli_fetch_array($result);
  if($_POST['status'.$i]=='present')
  {
  $att_percent=(($row['present']+1)/($row['total']+1))*100;
  $q="update erp set present=present+1,total=total+1,percentage='$att_percent' where id='$i'"; //doubt
  $q2="insert into erp_date(id,attendance_date,status) values($i,'$date','$status')"; // <--
  mysqli_query($con,$q);
  mysqli_query($con,$q2);
  }
  else if($_POST['status'.$i]=='absent')
  {
  $att_percent=($row['present']/($row['total']+1))*100;
  $q="update erp set absent=absent+1,total=total+1,percentage='$att_percent' where id='$i'";
  $q2="insert into erp_date(id,attendance_date,status) values($i,'$date','$status')"; // <--
  mysqli_query($con,$q);
  mysqli_query($con,$q2);
  }
}
mysqli_close($con);
?>

<script>
alert('Record submitted successfully!!!');
window.location.href='newhome.php'; //used to redirect after alert box
</script>
<?php } ?>

</body>
</html>

<!DOCTYPE html>
<html>
<head>
  <style>

  .detail_table {
    border-collapse: collapse;
    width:55%;
    margin-left:20%;

  }

  .detail_table tr:hover {
    background-color: #bfbdbd;
  }
  .detail_table th {
    font-size: 20px;
    font-family: sofia;
    height: 30px;

  }
  .detail_table th,td {
    text-align:center;
    padding: 5px;
    border-bottom: 1px solid #192A56;
  }
  </style>
  <title>Details</title>
</head>
<body>
  <?php session_start();
  if(!isset($_SESSION['user']) && !isset($_SESSION['roll']))
  header('location:http://localhost/erp login/login.php');
  else if(isset($_SESSION['user']))
  {

    $con= mysqli_connect('localhost','root','','logindb');
    //accessing no. of students
    $q="select * from erp";
    $result=mysqli_query($con,$q);
    $num=mysqli_num_rows($result);

    for($i=1;$i<=$num;$i++)
    {
      $row=mysqli_fetch_array($result);
      if(isset($_POST[$i]))  //checking which student's POST is set
      {
        echo 'Name - '.$row['name'].'<br>Roll No.- '.$row['roll_no'];
        //accessing set student's details
      $q="select id,roll_no,name,attendance_date,status from erp join erp_date using(id) where id='$i'";
      $result=mysqli_query($con,$q);
      $num=mysqli_num_rows($result);
      ?>
      <table class="detail_table";>
        <tr>
          <th style="color:#f3ca14;background-color:#192A56;">ID</th>
          <th style="color:#f3ca14;background-color:#192A56;">Roll No</th>
          <th style="color:#f3ca14;background-color:#192A56;">Date</th>
          <th style="color:#f3ca14;background-color:#192A56;">status</th>
        </tr>
      <?php
      for($j=1;$j<=$num;$j++)
      {
      $row=mysqli_fetch_array($result);
      ?>
      <tr>
        <td><?php echo $row['id'] ?></td>
        <td><?php echo $row['roll_no'] ?></td>
        <td><?php echo $row['attendance_date'] ?></td>
        <td><?php echo $row['status'] ?></td>
      </tr>
      <?php
      }
      }
    }
    ?>
  </table>
  <?php
  }
  else if(isset($_SESSION['roll']))
  {
    $con=mysqli_connect('localhost','root','','logindb');
    $q="select attendance_date,status from erp join erp_date using (id) where roll_no=".$_SESSION['roll'];
    $result=mysqli_query($con,$q);
    $num=mysqli_num_rows($result);
    echo "ROLL No. - ".$_SESSION['roll'];
    ?>
    <table class='detail_table'>
      <tr>
        <th style="color:#f3ca14;background-color:#192A56;">DATE</th>
        <th style="color:#f3ca14;background-color:#192A56;">status</th>
      </tr>
      <tr>
    <?php
    for($i=1;$i<=$num;$i++)
    {
        $row=mysqli_fetch_array($result);
        ?>
        <td><?php echo $row['attendance_date']; ?></td>
        <td> <?php echo $row['status']; ?></td>
      </tr>
<?php
  }
?>
  </table>
  <?php
}
?>
</body>
</html>

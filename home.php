<!DOCTYPE html>
<html>
  <head>
    <style>
    .detail{
      margin-left:30%;
      border-spacing:50px 20px;
    }
    </style>
    <meta charset="utf-8">
    <title>Attendance Entry</title>
    <link rel="stylesheet" href="erp.css">

  </head>
<?php session_start();
  if(!isset($_SESSION['user']))
  header('location:http://localhost/erp login/login.php');
  if($_POST['date']==0)
  {
  ?>
  <script>
    alert("Select Date");
    window.location.href='date.php';
  </script>
  <?php } ?>
    <h1 style="background-color:#f3ca14; padding:10px;">RKGIT ERP</h1>
    <p style="margin-left: 43%;font-size:30px;font-weight:bold;">Enter Attendance</p>
    <img id='bg' src="33430copy.jpg" alt="bg">
    <div>
     <a class="nav" href="newhome.php">Home</a><br>
     <a class="nav" href="date.php">Attendance Entry</a><br>
     <a class="nav" href="#">Marks entry</a><br>
     <a class="nav" href="attendance.php">View Attendance</a><br>
     <a class="nav" href="new_info.php">Add New Student Info.</a><br>
     <a class="nav" href="logout.php">Logout</a><br>
    </div>

     <br>

    <table class="detail">
    </tr>
      <th>ID</th>
      <th>ROLL No.</th>
      <th>NAME</th>
      <th>PRESENT</th>
      <th>ABSENT</th>
    </tr>


      <?php
      $_SESSION['date']=$_POST['date'];
      $con=mysqli_connect('localhost','root','','logindb');
      $q="select * from erp";
      $result=mysqli_query($con,$q);
      $num=mysqli_num_rows($result);
      ?>
      <p style="margin-left:33%;margin-top:-480px"> <?php echo 'Date- '.$_SESSION['date'].'(yyyy-mm-dd)';?></p>
      <form action="process.php" method="post">
        <?php
        for($i=1;$i<=$num;$i++)
        {
          $row=mysqli_fetch_array($result);
          ?>
          <tr>
          <td> <?php echo $row['id'] ?></td>
          <td> <?php echo $row['roll_no'] ?></td>
          <td> <?php echo $row['name'] ?></td>
          <!--initialform -->
            <td><input style="background-color:#192A56;" type="radio" name='status<?php echo $i;?>' value='present'> </td>
            <td><input type="radio" name='status<?php echo $i;?>' value='absent'> </td>
            </tr>
            <?php
          } ?>
      </table>
    <input type="submit" name="submit" value="Submit" style="margin-left:50%;margin-top:-1px;border-radius:25px">
          </form>
  </body>
</html>

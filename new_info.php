<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <title>Add Information</title>
    <link rel="stylesheet" href="erp.css">
  </head>
  <body>
    <h1 style="background-color:#f3ca14; padding:10px;">RKGIT ERP</h1>
    <p style="margin-left: 43%;font-size:30px;font-weight:bold;">Add New Student Entry</p>
    <img id='bg' src="33430copy.jpg" alt="bg">
    <div>
     <a class="nav" href="newhome.php">Home</a><br>
     <a class="nav" href="date.php">Attendance Entry</a><br>
     <a class="nav" href="#">Marks entry</a><br>
     <a class="nav" href="attendance.php">View Attendance</a><br>
     <a class="nav" href="new_info.php">Add New Student Info.</a><br>
     <a class="nav" href="logout.php">Logout</a><br>
    </div>

    <div style="margin-left:43%;margin-top:-450px;">
    <form class="" action="entry_process.php" method="post">
      Enter Name <input type="text" name="name" required><br><br>
      Enter Roll No.<input type="text" name="roll_no" required><br><br>
      Department
      <select name='dept' required>
        <option value="CSE">CSE</option>
        <option value="IT">IT</option>
        <option value="ECE">ECE</option>
        <option value="CE">CE</option>
        <option value="ME">ME</option>
      </select><br><br>
      Password <input type="text" name="password" required><br><br>
      <input type="submit" name="submit" value="Submit">
    </form>
    </div>

  </body>
</html>

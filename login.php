<!DOCTYPE html>
<html >
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <style media="screen">
      .faculty {
        width:46%;
        height: 100%;
        margin-left: 2%;
        border-bottom: 0px;
        border-width: 3px;
        border-style: inset;
        border-top-left-radius: 15px;
        border-bottom-right-radius: 15px;
        padding-bottom: 90px;
      }

      .student {
        width:46%;
        height: 100%;
        margin-left: 52%;
        margin-top: -403px;
        border-width: 2px;
        border-style: inset;
        border-top-left-radius: 15px;
        border-bottom-right-radius: 15px;
        padding-bottom: 90px;
        align-content:center;
      }
      .input {      /* text inputs*/
        border-radius: 12px;
        width: 250px;
        margin-left:27%;
        padding: 10px;
        border-width: 2px;
        border-style: inset;

      }
    </style>
  </head>
  <body style="background-color:#74B9FF;">
    <h1 style="background-color:#777E8B;">ERP- Welcome</h1>

    <div class="faculty">
      <h3 style="background-color:#f3ca14;text-align: center;">Faculty Login</h3>
    <form action="validation.php" method="post" style="padding-top:90px;">
      <input class="input" type="text" placeholder="Username" name="user" required><br><br>
      <input class="input" type="password" placeholder="Password" name="pass" required><br><br>
      <input style="border-radius:12px;padding: 12px;margin-left:45%;" type="submit" name="login" value="Login">
    </form>
  </div>

  <div class="student">
    <h3 style="background-color:#f3ca14;text-align: center;">Student Login</h3>
    <form action="validation.php" method="post"  style="padding-top:90px;">
      <input class="input" type="text" placeholder="Roll No" name="roll" required><br><br>
      <input class="input" type="password" placeholder="Password" name="pass" required><br><br>
      <input style="border-radius:12px;padding: 12px;margin-left:45%;"type="submit" name="login" value="Login">
    </form>
  </div>
  </body>
</html>

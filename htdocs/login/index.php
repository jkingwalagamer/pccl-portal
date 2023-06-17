<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login Form</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <div class="center">
      <?php
      //if(isset($_POST['sbmt'])) {
        //$msg = 'isset($_POST["pswd"]);';
        $msg = "hello";
        echo "<script>alert($msg)</script>";
      //}
      ?>
      <h1>Login</h1>
      <form method="post">
        <div class="txt_field">
          <input name="uname" type="text" required>
          <span></span>
          <label>Username</label>
        </div>
        <div class="txt_field">
          <input name="pswd" type="password" required>
          <span></span>
          <label>Password</label>
        </div>
        <br>
        <input name="sbmt" type="submit" value="Login">
        <div class="signup_link">
          <a href="#"> </a>
          <br>
        </div>
      </form>
    </div>

  </body>
</html>

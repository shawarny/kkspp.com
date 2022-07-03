<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Log-in</title>    
    <link rel="stylesheet" href="css/import_style.css">
    <link rel="stylesheet" href="css/login_style.css">    
  </head>
  <body>
    <div class="login-card">
    <h1>Log-in</h1><br>
  <form method="POST" action="checklogin.php">
    <input type="text" name="ic_no" placeholder="Username" autofocus>
    <input type="password" name="password" placeholder="Password">
    <input type="submit" name="login" class="login login-submit" value="LOGIN">
	<center><a href="../index.html">Back To Home</a></center>
  </form>
</div>
    <script src='js/jquery_login_ui.js'></script>
<script src='js/jquery_login_big.js'></script>
</body>
</html>

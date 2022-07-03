<?php 
include("session.php");
// Establishing connection with server by passing "server_name", "user_id", "password" 
  $connection = mysql_connect("localhost", "root", "");

// Selecting Database by passing "database_name" and above connection variable
  $db = mysql_select_db("kksp", $connection);
  $check=$_SESSION['login_username'];
  $query="SELECT * FROM admin WHERE no_ic='$check'";
  $output=mysql_query($query);
  $row=mysql_fetch_array($output);
?>
<html>
<head>
<title>Tukar Katalaluan</title>
<script src="navigation.js" type="text/javascript"></script>
<script src="script.js"></script>
<link rel="stylesheet" href="styles.css">
</head>
<body bgcolor=#E0F8F7>
<center><img src="header.png" style="width:100%; height:137px;">
<div id='cssmenu'>
<ul>
   <li><a href='admin_senarai.php'>Back</a></li>
</ul>
</div>
<caption><h2><b>TUKAR KATALALUAN ADMIN</b></h2></caption>
<div>
<form action ="engine_tukar_katalaluan.php" method="post" autocomplete="off">
<br>
<br>
<style>
			table {
    border-spacing: 15px;
}		
</style>		
<table border="1">
<tr><td>
	<table border="0">
		<tr>
			<td><b>Nama</b></td>
			<td>:</td>
			<td>
			<input type="text" name="no_ic" autocomplete="off" disabled value="<?php echo $row['no_ic']?>">
			<input type="hidden" name="no_ic" autocomplete="off" value="<?php echo $row['no_ic']?>">
			</td>
		</tr>
		<tr>
			<td><b>Katalaluan Lama</b></td>
			<td>:</td>
			<td><input type="text" name="password_old" autofocus autocomplete="off" required></td>
		</tr>
		<tr>
			<td><b>Katalaluan Baru</b></td>
			<td>:</td>
			<td><input type="text" name="password_new" autocomplete="off" required></td>
		</tr>
		<tr>
			<td></td>
		</tr>		
		<tr>
			<td><br></td>
		</tr>		
		<tr align="center">
			<td><input type="reset" name="clear" value="Clear"></td>	
			<td align "center"></td>
			<td><input type="submit" name="submit" value="Register"></td> 			
		</tr>
	</table>
</table>
</center>
</form>
</div>
</body>
<script src="js/jquery.js"></script>
</html>
<html>
<head>
<title>Maklumat Graduan</title>
<script src="navigation.js" type="text/javascript"></script>
<script src="script.js"></script>
<link rel="stylesheet" href="styles.css">
</head>
<body bgcolor=#F0F8FF>
<center><img src="header.png" style="width:1350px; height:137px;">
<div id='cssmenu'>
<ul>
   <li><a href='admin_senarai.php'>Back</a></li>
</ul>
</div>
<caption><h2><b>MAKLUMAT GRADUAN</b></h2></caption>
<?php
$conn = mysql_connect("localhost","root","");
if(!$conn)
{
die('Could not connect:' . mysql_error());
}
mysql_select_db("kksp",$conn);
$result = "SELECT * FROM student where table_id = ".($_REQUEST['id'])."";
$output=mysql_query($result) or die(mysql_error());
$row=mysql_fetch_array($output);
$result2 = "SELECT * FROM student where table_id = ".($_REQUEST['id'])."";
$output2=mysql_query($result2) or die(mysql_error());
$row2=mysql_fetch_array($output2);					
?>



<form method="post" action="engine_admin_view.php">
<table border="1">
		<tr>
			<td>Nama :</td>
			<td><input type="text" name="nama" value="<?php echo $row['nama']?>" disabled="disabled" size="40">
			<input type="hidden" name="no_kp" value="<?php echo $row2['no_kp']?>">
			</td>
		</tr>		
		<tr>
			<td>No KP :</td>
			<td><input type="text" name="no_kp" value="<?php echo $row['no_kp']?>"disabled="disabled" size="40">
			</td>
		</tr>		
		<tr>
			<td>No Matrik :</td>
			<td><input type="text" name="no_matrik" value="<?php echo $row['no_matrik']?>"disabled="disabled" size="40"></td>
		</tr>				
		<tr>
			<td>Unit :</td>
			<td><input type="text" name="unit" value="<?php echo $row['unit']?>" size="40"></td>
		</tr>		
		<tr>
			<td>Sesi :</td>
			<td><input type="text" name="sesi" value="<?php echo $row['sesi']?>" size="40"/></td>
		</tr>		
		<tr>
			<td>Sidang :</td>
			<td><input type="text" name="sidang" value="<?php echo $row['sidang']?>" size="40"/></td>
		</tr>		
		<tr>
			<td>Password :</td>
			<td><input type="text" name="password" value="<?php echo $row['password']?>" size="40"/></td>
		</tr>
		<tr align="center">
			<td colspan="2"><input type="submit" name="submit" value="Kemaskini"></td>
		</tr>		
</table>
</form>
</center>
</body>
<script src="js/jquery.js"></script>
</html>
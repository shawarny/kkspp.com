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
   <li><a href='logout.php'>Logout</a></li>
</ul>
</div>
<caption><h2><b>MAKLUMAT GRADUAN</b></h2></caption>
<?php
include("session.php");
$conn = mysql_connect("localhost","root","");
if(!$conn)
{
die('Could not connect:' . mysql_error());
}
mysql_select_db("kksp",$conn);
$result = "SELECT * FROM student where no_kp = ".$_SESSION['login_username']."";
$output=mysql_query($result) or die(mysql_error());
$row=mysql_fetch_array($output);
$result2 = "SELECT * FROM kehadiran where no_kp = ".$_SESSION['login_username']."";
$output2=mysql_query($result2) or die(mysql_error());
$row2=mysql_fetch_array($output2);					
?>



<form method="post" action="admin_update_engine.php">
<table border="1">
		<tr>
			<td>Nama :</td>
			<td><input type="text" name="nama" value="<?php echo $row['nama']?>" disabled="disabled" size="40">
			<input type="hidden" name="table_id" value="<?php echo $row2['table_id']?>">
			</td>
		</tr>		
		<tr>
			<td>No KP :</td>
			<td><input type="text" name="NumberIC" value="<?php echo $row['no_kp']?>"disabled="disabled" size="40">
			</td>
		</tr>		
		<tr>
			<td>No Matrik :</td>
			<td><input type="text" name="nama" value="<?php echo $row['no_matrik']?>"disabled="disabled" size="40"></td>
		</tr>				
		<tr>
			<td>Unit :</td>
			<td><input type="text" name="Tarikh" value="<?php echo $row['unit']?>"disabled="disabled" size="40"></td>
		</tr>		
		<tr>
			<td>Sesi :</td>
			<td><input type="text" name="AduanKerosakan" value="<?php echo $row['sesi']?>"disabled="disabled" size="40"/></td>
		</tr>		
		<tr>
			<td>Sidang :</td>
			<td><input type="text" name="TempatKerosakan" value="<?php echo $row['sidang']?>"disabled="disabled" size="40"/></td>
		</tr>		
		<tr>
			<td>Password :</td>
			<td><input type="text" name="Jabatan" value="<?php echo $row['password']?>"disabled="disabled" size="40"/></td>
		</tr>	
</table>
</form>
<!--<?php echo $row2['status']?>-->
<?php
if ($row2['status']=='Lulus'){
	echo "<h2 style='color:green;'>";
	echo $row2['status'];
	echo " !</h2>";
}
else if ($row2['status']=='Belum Diperiksa'){
	echo "<h2 style='color:purple;'>";
	echo $row2['status'];
	echo " !</h2>";
}
else if ($row2['status']=='Gagal'){
	echo "<h2 style='color:red;'>";
	echo $row2['status'];
	echo " !</h2>";
}
else{
	echo "<h2 style='color:black;'>";
	echo "Sila Daftar Kehadiran";
	echo " !</h2>";
}
?>
<p><font color="black">Tahniah! Anda layak untuk mengahadiri majlis konvokesyen KKSP.</font></p>
<p><font color="red">* Sila semak maklumat anda sekiranya ada kesalahan sila hubungi unit HEP.</font></p>
<a href="maklumat_kehadiran.php">Teruskan</a>
</center>
</body>
<script src="js/jquery.js"></script>
</html>
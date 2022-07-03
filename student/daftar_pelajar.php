<?php 
include("session.php");
?>
<html>
<head>
<title>Maklumat Graduan</title>
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
<caption><h2><b>DAFTAR PELAJAR</b></h2></caption>
<div>
<form action ="engine_daftar_pelajar.php" method="post" autocomplete="off">
<caption><b>STUDENT REGISTER FORM</b></caption>
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
			<td><input type="text" name="nama" autofocus placeholder="John or Johny" autocomplete="off"></td>
		</tr>		
		<tr>
			<td><b>No KP</b></td>
			<td>:</td>
			<td><input type="text" name="no_kp" placeholder="85XXXXXXXXXX" autocomplete="off"></td>
		</tr>		
		<tr>
			<td><b>No Matrik</b></td>
			<td>:</td>
			<td><input type="text" name="no_matrik" placeholder="K122xxxx" autocomplete="off"></td>
		</tr>
		<tr>
			<td><b>Unit</b></td>
			<td>:</td>
			<td>
			<select name="unit">
			<option value="Unit Kulnuri">Unit Kulnuri
			<option value="Unit Service Kenderaan Ringan">Unit Service Kenderaan Ringan
			<option value="Unit Operasi Perhotelan">Unit Operasi Perhotelan
			<option value="Unit Terapi Kecantikan dan Spa">Unit Terapi Kecantikan dan Spa
			</select>
			</td>
		</tr>
		<tr>
			<td><b>Sesi</b></td>
			<td>:</td>
			<td><input type="text" name="sesi" placeholder="2012 or 2013" autocomplete="off"></td>
		</tr>
		<tr>
			<td><b>Sidang</b></td>
			<td>:</td>
			<td><input type="text" name="sidang" placeholder="2013 or 2014" autocomplete="off"></td>
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
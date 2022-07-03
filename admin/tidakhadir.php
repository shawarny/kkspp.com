<?php 
include("session.php");
// Create connection
$connection=mysql_connect("localhost","root","");
// Check connection
if (!$connection) 
{
  die('Could not connected: '.mysql_error());
}
//Connect Database
mysql_select_db("kksp",$connection);
//Query select statement
$result = "SELECT upload FROM file_tidakhadir";
$output = mysql_query($result);
$row=mysql_fetch_array($output);

?>
<html>
<head>
<title>Muat Naik Garis Panduan Tidak Hadir</title>
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
<div>
<form action ="engine_upload_tidakhadir.php" method="post" autocomplete="off" enctype="multipart/form-data">
<caption><b>Muat Naik Garis Panduan Tidak Hadir</b></caption>
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
			<td><b>File</b></td>
			<td>:</td>
			<td><input name="upload" class="element file" type="file"/></td>
		</tr>		
		<tr align="center">
			<td><a href="upload/<?php echo $row['upload'];?>">Test Upload File Here</a></td>
		</tr>				
		<tr align="center">
			<td align "center"></td>
			<td><input type="submit" name="upload" value="Upload"></td>
			<td><input type="reset" name="clear" value="Padam"></td> 			
		</tr>
	</table>
</table>
</center>
</form>
</div>
</body>
<script src="js/jquery.js"></script>
</html>
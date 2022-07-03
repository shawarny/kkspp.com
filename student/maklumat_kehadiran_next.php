<html>
<?php
$connection=mysql_connect("localhost","root","");
// Check connection
if (!$connection) 
{
  die('Could not connected: '.mysql_error());
}
//Connect Database
mysql_select_db("kksp",$connection);

$result16 = "SELECT upload FROM file_surat_jemputan";
$output16 = mysql_query($result16);
$row16=mysql_fetch_array($output16);
$result15 = "SELECT upload FROM file_hotelnhomestay";
$output15 = mysql_query($result15);
$row15=mysql_fetch_array($output15);
$result14 = "SELECT upload FROM file_map";
$output14 = mysql_query($result14);
$row14=mysql_fetch_array($output14);
$result13 = "SELECT upload FROM file_tentatif";
$output13 = mysql_query($result13);
$row13=mysql_fetch_array($output13);
$result12 = "SELECT upload FROM file_tidakhadir";
$output12 = mysql_query($result12);
$row12=mysql_fetch_array($output12);
$result11 = "SELECT upload FROM file_hadir";
$output11 = mysql_query($result11);
$row11=mysql_fetch_array($output11);
?>
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
   <li><a href='#'>Garis Panduan</a>
   <ul>
   <li><a href="../admin/upload/<?php echo $row11['upload'];?>">Hadir</a></li>
   <li><a href="../admin/upload/<?php echo $row12['upload'];?>">Tidak Hadir</a></li>
   </ul>
   </li>
   <li class="active"><a href='maklumat_kehadiran.php'>Maklumat Kehadiran</a>
   <li><a href='#'>Tentatif Program</a>
   <ul>
   <li><a href="../admin/upload/<?php echo $row13['upload'];?>">Tentatif Semasa</a></li>
   </ul>
   </li>
   <li><a href='#'>Maklumat Lanjutan</a>
   <ul>
   <li><a href="../admin/upload/<?php echo $row14['upload'];?>">Map</a></li>
   <li><a href="../admin/upload/<?php echo $row15['upload'];?>">Senarai Hotel & Home Stay</a></li>
   <li><a href="../admin/upload/<?php echo $row16['upload'];?>">Surat Jemputan</a></li>   
   </ul>
   </li>
   <li><a href='logout.php'>Logout</a></li>
</ul>
</div>
<caption><h2><b>MAKLUMAT KEHADIRAN</b></h2></caption>
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
$result2 = "SELECT * FROM student where no_kp = ".$_SESSION['login_username']."";
$output2=mysql_query($result2) or die(mysql_error());
$row2=mysql_fetch_array($output2);
$result3 = "SELECT * FROM kehadiran where no_kp = ".$_SESSION['login_username']."";
$output3=mysql_query($result3) or die(mysql_error());
$row3=mysql_fetch_array($output3);	
?>
<script src="js/jquery.js"></script>
<script type="text/javascript">
function showMe(e) {
    var strdisplay = e.options[e.selectedIndex].value;
    var e = document.getElementById("idShowMe");
	var f = document.getElementById("idShowMe2");
    if(strdisplay == "Tidak Hadir") {
        e.style.display = "none";
		f.style.display = "none";
    } else {
        e.style.display = "block";
		f.style.display = "block";
    }
}
</script>
<form method="post" action="engine_maklumat_kehadiran_next.php">
<table border="1">
		<tr>
			<td>Nama :</td>
			<td><input type="text" name="nama" value="<?php echo $row['nama']?>" disabled="disabled" size="40">
			<input type="hidden" name="nama" value="<?php echo $row2['nama']?>">
			</td>
		</tr>		
		<tr>
			<td>No KP :</td>
			<td><input type="text" name="no_kp" value="<?php echo $row['no_kp']?>"disabled="disabled" size="40">
			<input type="hidden" name="no_kp" value="<?php echo $row2['no_kp']?>">
			</td>
		</tr>		
		<tr>
			<td>No Matrik :</td>
			<td><input type="text" name="no_matrik" value="<?php echo $row['no_matrik']?>"disabled="disabled" size="40">
			<input type="hidden" name="no_matrik" value="<?php echo $row2['no_matrik']?>">
			</td>
		</tr>				
		<tr>
			<td>Unit :</td>
			<td><input type="text" name="unit" value="<?php echo $row['unit']?>"disabled="disabled" size="40">
			<input type="hidden" name="unit" value="<?php echo $row2['unit']?>">
			</td>
		</tr>		
		<tr>
			<td>Sesi :</td>
			<td><input type="text" name="sesi" value="<?php echo $row['sesi']?>"disabled="disabled" size="40"/>
			<input type="hidden" name="sesi" value="<?php echo $row2['sesi']?>">
			</td>
		</tr>		
		<tr>
			<td>Sidang :</td>
			<td><input type="text" name="sidang" value="<?php echo $row['sidang']?>"disabled="disabled" size="40"/>
			<input type="hidden" name="sidang" value="<?php echo $row2['sidang']?>">
			</td>
		</tr>		
		<tr>
			<td>Status Kehadiran :</td>
			<td>
			<input type="text" name="status_kehadiran" value="<?php echo $row3['status_kehadiran']?>"disabled="disabled" size="40"/>
			</td>
		</tr>
		<tr>
			<td>Saiz Jubah  :</td>		
			<td>
			<input type="text" name="saiz_jubah" value="<?php echo $row3['saiz_jubah']?>"disabled="disabled" size="40"/>			
			</td>
		</tr>
		<tr>
			<td>No Resit  :</td>		
			<td>
			<input type="text" name="no_resit" value="<?php echo $row3['no_resit']?>"disabled="disabled" size="40"/>
			</td>
		</tr>
		<tr>
			<td>Gambar Resit  :</td>		
			<td>
			<a href="upload/<?php echo $row3['upload']?>">Muat turun gambar di sini</a>
			</td>
		</tr>		
		<tr>
			<td>Alamat :</td>
			<td>
			<textarea name="alamat" rows="3" cols="40" wrap="hard">
			<?php echo $row3['alamat']?>
			</textarea></td>
		</tr>
		<tr>
			<td>Email :</td>
			<td><input type="text" name="email" value="<?php echo $row3['email']?>" size="40"/></td>
		</tr>
		<tr align="center">
			<td colspan="2" align="center">
			<input type="submit" name="submit" value="Kemaskini">
			</td>
		</tr>
</table>
</form>
</center>
</body>
</html>
<?php 
include("session.php");
?>
<html>
<head>
<title>Maklumat Graduan</title>
<script src="navigation.js" type="text/javascript"></script>
<script src="script.js"></script>
<link rel="stylesheet" href="styles.css">
<link href="css/jquery.dataTables.css" rel="stylesheet" />
<link href="css/dataTables.tableTools.css" rel="stylesheet" />
</head>
<body bgcolor=#E0F8F7>
<center><img src="header.png" style="width:100%; height:137px;">
<div id='cssmenu'>
<ul>
   <li><a href='admin_senarai.php'>Senarai Graduan</a>
   <ul>
	<li><a href='daftar_pelajar.php'>Daftar Pelajar</a></li>
   </ul>
   </li>  
   <li class="active"><a href='admin_senarai_penyelaras.php'>Senarai Penyelaras</a>
   <ul>
	<li><a href='daftar_penyelaras.php'>Daftar Penyelaras</a></li>
   </ul>
   </li>     
   <li><a href='status_graduan.php'>Status Graduan</a></li>
   <li><a href='#'>Garis Panduan</a>
   <ul>
	<li><a href='hadir.php'>Hadir</a></li>
	<li><a href='tidakhadir.php'>Tidak Hadir</a></li>
   </ul>
   </li>
   <li><a href='#'>Tentatif Program</a>
   <ul>
	<li><a href='tentatif_semasa.php'>Tentatif Semasa</a></li>
   </ul>
   </li>   
   <li><a href='#'>Maklumat Lanjut</a>
   <ul>
	<li><a href='map.php'>Map</a></li>
	<li><a href='hotelnhomestay.php'>Hotels & Homestay</a></li>
	<li><a href='surat_jemputan.php'>Surat Jemputan</a></li>
   </ul>
   </li>         
   <li><a href='tukar_katalaluan.php'>Tukar Katalaluan</a></li>   
   <li><a href='logout.php'>Logout</a></li>
</ul>
</div>
</center>
<ul>
<a href="admin_senarai_penyelaras_uk.php">Unit Kulnuri</a> ||||
<a href="admin_senarai_penyelaras_uskr.php">Unit Servis Kenderaan Ringan</a></li> ||||
<a href="admin_senarai_penyelaras_uop.php">Unit Operasi Perhotelan</a> ||||
<a href="admin_senarai_penyelaras_utkds.php">Unit Terapi Kecantikan dan Spa</a>
</ul>
<center>
<caption><h2><b>MAKLUMAT GRADUAN</b></h2></caption>
<?php
//mysql connect
$conn=mysql_connect("localhost","root","");
if (!$conn)
	{
		die ('could not connect:' . mysql_error());
	}
	
	//connect databse
	mysql_select_db ("kksp",$conn);
	
	//sql statement
	$result="SELECT * FROM staff where unit='Unit Operasi Perhotelan'";
	
	//query
	$output= mysql_query ($result);
?>
<div>
<table id="entry" class="display" cellspacing="0" width="100%">
	<thead>
	<tr> 
		<td><b>Nama</b></td>
		<td><b>No KP</b></td>
		<td><b>Unit</b></td>
		<td><b>Password</b></td>
		<td><b>Tindakan</b></td>
	</tr>
	</thead>
	<tbody>	
<?php
while ($row=mysql_fetch_array ($output))
{
?>	
	<tr> 
		<td><?php echo $row ['nama']?></td>
		<td><?php echo $row ['no_kp']?></td>
		<td><?php echo $row ['unit']?></td>
		<td><?php echo $row ['password']?></td>
		<td>
		<a href="admin_view_penyelaras.php?id=<?php echo $row ['table_id']?>">View</a>
		<a href="delete_penyelaras.php?id=<?php echo $row ['table_id']?>">Delete</a>
		</td>				
	</tr>
<?php
}
?>
</tbody>
</table>
</div>
</body>
<script src="js/jquery.js"></script>
<script src="js/jquery.dataTables.js"></script>
<script src="js/dataTables.tableTools.js"></script>
<script type="text/javascript">
$(document).ready(function() {
    $('#entry').DataTable({
		"ordering": true
	});
} );
</script>
</html>
<?php 
include("session.php");
?>
<html>
<head>
<link rel="stylesheet" href="styles.css">
<link href="css/jquery.dataTables.css" rel="stylesheet" />
<link href="css/dataTables.tableTools.css" rel="stylesheet" />
</head>
<body bgcolor=#F0F8FF>
<center><img src="header.png" style="width:1350px; height:137px;">
<div id='cssmenu'>
<ul>
   <li><a href='admin_senaraiAduan.php'>Utama e-Aduan</a></li>
   <li class="active"><a href='admin_statistik.php'>Statistik</a></li>
   <li><a href='logout.php'>Logout</a></li>
</ul>
</div>
<caption><h2><b>Statistik Aduan</b></h2></caption>
<?php
//mysql connect
$conn=mysql_connect("localhost","root","");
if (!$conn)
	{
		die ('could not connect:' . mysql_error());
	}
	
	//connect databse
	mysql_select_db ("eAduan_UPP",$conn);
	
	//sql statement
	$biladu = mysql_query("SELECT count(*) from new_complaint;");
	$biladujka = mysql_query("SELECT count(*) from new_complaint where jabatan='JKA';");
	$biladujke = mysql_query("SELECT count(*) from new_complaint where jabatan='JKE';");
	$biladujkm = mysql_query("SELECT count(*) from new_complaint where jabatan='JKM';");
	$biladujp = mysql_query("SELECT count(*) from new_complaint where jabatan='JP';");
	$biladujtmk = mysql_query("SELECT count(*) from new_complaint where jabatan='JTMK';");
?>
<div>
<table id="entry" class="display" border="1" cellspacing="0" width="100%">
	<thead>
	<tr> 
		<td><b>JKA</b></td>
		<td><b>JKE</b></td>
		<td><b>JKM</b></td>
		<td><b>JP</b></td>
		<td><b>JTMK</b></td>
		<td><b>TOTAL</b></td>
	</tr>
	</thead>
	<tbody>	
	<tr> 
		<td><?php echo mysql_result($biladujka, 0);?></td>
		<td><?php echo mysql_result($biladujke, 0);?></td>
		<td><?php echo mysql_result($biladujkm, 0);?></td>
		<td><?php echo mysql_result($biladujp, 0);?></td>
		<td><?php echo mysql_result($biladujtmk, 0);?></td>
		<td><?php echo mysql_result($biladu, 0);?></td>
	</tr>
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
		"ordering": true,
		"searching": false
	});
} );
</script>
</html>
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
   <li><a href='logout.php'>Logout</a></li>
</ul>
</div>
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
	$result="SELECT * FROM staff";
	
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
<?php
// Establishing connection with server by passing "server_name", "user_id", "password" 
  $connection = mysql_connect("localhost", "root", "");

// Selecting Database by passing "database_name" and above connection variable
  $db = mysql_select_db("kksp", $connection);

//Fetching Values from URL  
$nama=$_POST['nama'];
$no_kp=$_POST['no_kp'];
$no_matrik=$_POST['no_matrik'];
$unit=$_POST['unit'];
$sesi_bulan=$_POST['sesi_bulan'];
$sesi_tahun=$_POST['sesi_tahun'];
$sidang=$_POST['sidang'];
$password=$_POST['no_matrik'];
//Insert query 
//$checker=mysql_query("SELECT COUNT(tarikh) FROM haribertugas WHERE tarikh='$haribertugas1'");
$query = mysql_query("insert into student(nama, no_kp, no_matrik, unit, sesi, sidang, password) 
			values ('$nama','$no_kp','$no_matrik','$unit','$sesi_bulan $sesi_tahun','$sidang','$password')");
//$query2 = mysql_query("insert into haribertugas(tarikh,icnumber) values ('$haribertugas1',$icnumber)");


  if($query){
  echo "<script languange = 'Javascript'>
				alert('Submit successfully');
				location.href = 'admin_senarai.php';</script>";	
  }
  else
  {
	echo "<script languange = 'Javascript'>
				alert('Something happened.');
				location.href = 'admin_senarai.php';</script>";
  }
//connection closed
mysql_close($connection);
?>
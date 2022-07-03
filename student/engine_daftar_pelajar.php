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
$sesi=$_POST['sesi'];
$sidang=$_POST['sidang'];
$status="Belum Diperiksa";
$password=$_POST['no_matrik'];
//Insert query 
//$checker=mysql_query("SELECT COUNT(tarikh) FROM haribertugas WHERE tarikh='$haribertugas1'");
$query = mysql_query("insert into student(nama, no_kp, no_matrik, unit, sesi, sidang, password, status) 
			values ('$nama','$no_kp','$no_matrik','$unit','$sesi','$sidang','$password','$status')");
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
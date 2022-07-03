<?php
// Establishing connection with server by passing "server_name", "user_id", "password" 
  $connection = mysql_connect("localhost", "root", "");

// Selecting Database by passing "database_name" and above connection variable
  $db = mysql_select_db("kksp", $connection);

//Fetching Values from URL  
$no_kp=$_POST['no_kp'];
$alamat=$_POST['alamat'];
$email=$_POST['email'];
$status="Belum Diperiksa";
//Insert query 
//$checker=mysql_query("SELECT COUNT(tarikh) FROM haribertugas WHERE tarikh='$haribertugas1'");
$query = mysql_query("UPDATE kehadiran SET alamat='$alamat', email='$email', status='$status' WHERE no_kp='$no_kp'");
//$query2 = mysql_query("insert into haribertugas(tarikh,icnumber) values ('$haribertugas1',$icnumber)");


  if($query){
  echo "<script languange = 'Javascript'>
				alert('Submit successfully');
				location.href = 'maklumat_kehadiran.php';</script>";	
  }
  else
  {
	echo "<script languange = 'Javascript'>
				alert('Something happened.');
				location.href = 'maklumat_kehadiran.php';</script>";
  }
//connection closed
mysql_close($connection);
?>
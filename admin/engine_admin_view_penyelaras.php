<?php
// Establishing connection with server by passing "server_name", "user_id", "password" 
  $connection = mysql_connect("localhost", "root", "");

// Selecting Database by passing "database_name" and above connection variable
  $db = mysql_select_db("kksp", $connection);

//Fetching Values from URL  
$no_kp=$_POST['no_kp'];
$unit=$_POST['unit'];
$password=$_POST['password'];
//Insert query 
//$checker=mysql_query("SELECT COUNT(tarikh) FROM haribertugas WHERE tarikh='$haribertugas1'");
$query = mysql_query("UPDATE staff SET unit='$unit', password='$password' WHERE no_kp='$no_kp'");
//$query2 = mysql_query("insert into haribertugas(tarikh,icnumber) values ('$haribertugas1',$icnumber)");


  if($query){
  echo "<script languange = 'Javascript'>
				alert('Submit successfully');
				location.href = 'admin_senarai_penyelaras.php';</script>";	
  }
  else
  {
	echo "<script languange = 'Javascript'>
				alert('Something happened.');
				location.href = 'admin_senarai_penyelaras.php';</script>";
  }
//connection closed
mysql_close($connection);
?>
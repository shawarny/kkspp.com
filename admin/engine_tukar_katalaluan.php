<?php
// Establishing connection with server by passing "server_name", "user_id", "password" 
  $connection = mysql_connect("localhost", "root", "");

// Selecting Database by passing "database_name" and above connection variable
  $db = mysql_select_db("kksp", $connection);

//Fetching Values from URL  
$no_ic=$_POST['no_ic'];
$old=$_POST['password_old'];
$new=$_POST['password_new'];
//Insert query 
//$checker=mysql_query("SELECT COUNT(tarikh) FROM haribertugas WHERE tarikh='$haribertugas1'");
$query = mysql_query("SELECT * FROM admin WHERE no_ic='$no_ic'");
$row=mysql_fetch_array($query);
$old_password=$row['password'];

  if($old_password == $old AND $new != ""){
		$query2=mysql_query("UPDATE admin SET password='$new' WHERE no_ic='$no_ic'");
  echo "<script languange = 'Javascript'>
				alert('Submit successfully');
				location.href = 'admin_senarai.php';</script>";	
  }
  else if($old_password != $old)
  {
	echo "<script languange = 'Javascript'>
				alert('Katalaluan lama salah. Sila cuba lagi.');
				location.href = 'tukar_katalaluan.php';</script>";
  }
  else{
	echo "<script languange = 'Javascript'>
				alert('Something happened.');
				location.href = 'tukar_katalaluan.php';</script>";
  }
//connection closed
mysql_close($connection);
?>
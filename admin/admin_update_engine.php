<?php
include('config.php');

//tangkap data dari form
$NoAduan=$_POST['NoAduan'];
$status=$_POST['status'];
//update data di database sesuai user_id
$query = mysql_query("update new_complaint set 
status='$status' where table_id='$NoAduan'") or die(mysql_error());

if ($query) {
	echo "Aduan telah dikemaskini";
	header('location:admin_senaraiAduan.php');
}
?>
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
$status_kehadiran=$_POST['status_kehadiran'];
$saiz_jubah=$_POST['saiz_jubah'];
$no_resit=$_POST['no_resit'];
$alamat=$_POST['alamat'];
$email=$_POST['email'];
$status="Belum Diperiksa";
$target_dir = "upload/";
$new_file_name=$no_matrik.'_'.strtotime("now").'_'.basename($_FILES["upload"]["name"]);
$target_file = $target_dir .$new_file_name ;

if (move_uploaded_file($_FILES["upload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["upload"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
//Insert query 
//$checker=mysql_query("SELECT COUNT(tarikh) FROM haribertugas WHERE tarikh='$haribertugas1'");
$query = mysql_query("insert into kehadiran(nama, no_kp, no_matrik, unit, sesi, sidang, status_kehadiran, saiz_jubah, no_resit, alamat, email, status, upload) 
			values ('$nama','$no_kp','$no_matrik','$unit','$sesi','$sidang','$status_kehadiran','$saiz_jubah','$no_resit','$alamat','$email','$status','$new_file_name')");
//$query2 = mysql_query("insert into haribertugas(tarikh,icnumber) values ('$haribertugas1',$icnumber)");


  if($query){
  echo "<script languange = 'Javascript'>
				alert('Submit successfully');
				location.href = 'maklumat_graduan.php';</script>";	
  }
  else
  {
	echo "<script languange = 'Javascript'>
				alert('Something happened.');
				location.href = 'maklumat_graduan.php';</script>";
  }
//connection closed
mysql_close($connection);
?>
<?php
// Establishing connection with server by passing "server_name", "user_id", "password" 
  $connection = mysql_connect("localhost", "root", "");

// Selecting Database by passing "database_name" and above connection variable
  $db = mysql_select_db("kksp", $connection);

//Fetching Values from URL  
$target_dir = "upload/";
$new_file_name=strtotime("now").'_'.basename($_FILES["upload"]["name"]);
$target_file = $target_dir .$new_file_name ;

if (move_uploaded_file($_FILES["upload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["upload"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }

//Insert query 
  $query = mysql_query("UPDATE file_hotelnhomestay SET upload='".$new_file_name."' ");
  if($query){
  echo "<script languange = 'Javascript'>
				alert('Upload successfully');
				location.href = 'hotelnhomestay.php';</script>";	
  }
  else
  {
	echo "<script languange = 'Javascript'>
				alert('Something happened.');
				location.href = 'hotelnhomestay.php';</script>";
  }
//connection closed
mysql_close($connection);
?>
<?php
include('config.php');
session_start();
$check=$_SESSION['login_username'];
$session=mysql_query("SELECT no_ic FROM admin WHERE no_ic='$check' ");
$row=mysql_fetch_array($session);
$login_session=$row['no_ic'];
if(!isset($login_session))
{
header("Location:../admin.html");
}
?>
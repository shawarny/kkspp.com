<?php
include('config.php');
session_start();
$check=$_SESSION['login_username'];
$session=mysql_query("SELECT no_kp FROM student WHERE no_kp='$check' ");
$row=mysql_fetch_array($session);
$login_session=$row['no_kp'];
if(!isset($login_session))
{
header("Location:../student.html");
}
?>
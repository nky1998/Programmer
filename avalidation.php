<?php
session_start();
 
$dbServername ="localhost";
$dbUsername ="root";
$dbPassword ="";
$dbname ="userregisteration1";
$con= mysqli_connect($dbServername, $dbUsername , $dbPassword);
mysqli_select_db($con , 'adminregisteration1');
$name = $_POST['user'];
$pass = $_POST['password'];
$s = "select * from admintable where name = '$name' && password = '$pass'";
$result = mysqli_query($con , $s);
$num = mysqli_num_rows($result);
if($num == 1)
{
    $_SESSION['username'] = $name;
    header('location:ahome.php');
}
else
{
    header('location:alogin.php');
}
?>
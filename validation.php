<?php
session_start();
 
$dbServername ="localhost";
$dbUsername ="root";
$dbPassword ="";
$dbname ="userregisteration1";
$con= mysqli_connect($dbServername, $dbUsername , $dbPassword);
mysqli_select_db($con , 'userregisteration1');
$name = $_POST['user'];
$pass = $_POST['password'];
$s = "select * from usertable where name = '$name' && password = '$pass'";
$result = mysqli_query($con , $s);
$num = mysqli_num_rows($result);
if($num == 1)
{
    $_SESSION['username'] = $name;
    header('location:home.php');
}
else
{
    header('location:login.php');
}
?>
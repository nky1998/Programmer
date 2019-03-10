<?php
session_start();
header('location:alogin.php');
$dbServername ="localhost";
$dbUsername ="root";
$dbPassword ="";
$dbname ="adminregisteration1";
$con= mysqli_connect($dbServername, $dbUsername , $dbPassword);
mysqli_select_db($con , 'adminregisteration1');
$name = $_POST['user'];
$pass = $_POST['password'];
$s = "select * from admintable where name = '$name'";
$result = mysqli_query($con , $s);
$num = mysqli_num_rows($result);
if($num == 1)
{
    echo"Username already taken ";
}
else
{
    $reg="insert into admintable(NAME , PASSWORD) values('$name' , '$pass')";
    mysqli_query($con , $reg);
    echo"Registeration Successfull";
}
?>
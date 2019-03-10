<?php
session_start();
header('location:login.php');
$dbServername ="localhost";
$dbUsername ="root";
$dbPassword ="";
$dbname ="userregisteration1";
$con= mysqli_connect($dbServername, $dbUsername , $dbPassword);
mysqli_select_db($con , 'userregisteration1');
$name = $_POST['user'];
$pass = $_POST['password'];
$s = "select * from usertable where name = '$name'";
$result = mysqli_query($con , $s);
$num = mysqli_num_rows($result);
if($num == 1)
{
    echo"Username already taken ";
}
else
{
    $reg="insert into usertable(NAME , PASSWORD) values('$name' , '$pass')";
    mysqli_query($con , $reg);
    echo"Registeration Successfull";
}
?>
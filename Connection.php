<?php
error_reporting(0);  
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "contactUs";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if($conn)
{
    //echo "Connection ok";
}
else
{
    echo "Connection failed".mysql_connect_error();
}
?>
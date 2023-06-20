<?php
$ser="localhost:3308";
$user="root";
$pass="";
$db="cozy_breeze_hotel";
$conn=mysqli_connect($ser,$user,$pass,$db);
if($conn)
{
echo "Connection Success";
}
else
{
echo "connection failed";
}
?>


<?php
$servername = "localhost";
$user = "root";
$password ="";
$db = "sample";
$conn = mysql_connect($servername ,$user ,$password ,$db );

if(!&conn)
{
    die("Connection failed:".mysqli_connect_error());
}
else
{
    echo"Connection successful!";
}
?>
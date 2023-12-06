<?php
$host = "localhost";
$user = "root";
$pass = "";
$database = "furni";

$conn=mysqli_connect($host, $user, $pass, $database);
if ($conn){
    echo "";
}else{
    die("gak bisa bang").mysqli_connect_error();
}
?>
<?php
$server="localhost";
$username="root";
$password="";
$db="bankdb";

$conn = mysqli_connect($server,$username,$password,$db);
if(!$conn){
    echo"Could not connect: ".mysql_error();
}

?>

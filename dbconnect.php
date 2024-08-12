<?php

$server="localhost";
$username="root";
$password="";
$database="allinone";

$conn=mysqli_connect($server,$username,$password,$database);
if (!$conn){
    die("Error because ".mysqli_connect_error());
}

?>
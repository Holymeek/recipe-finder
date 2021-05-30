<?php

$sname = "localhost";
$uname = "root";
$password = "admin";

$db_name = "recipe";

$conn = mysqli_connect($sname, $uname, $password, $db_name);

if(!$conn){
    echo "connection failed";
    exit();
}else{
echo "connected successfully";
}
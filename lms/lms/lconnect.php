<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "s_l";
$conn = mysqli_connect($server,$username,$password,$database);//hostname and username
if($conn){
    echo "connected successfully";
} 
else{
    echo "not connected";
}
<?php

$server = "localhost";
$username = "root";
$password = "";
$database = "s_l";


//it is for connection and musqli_connwct is an function to connect with database and it takes some parameterslike as you can see.
$conn = mysqli_connect($server,$username,$password,$database);//hostname and username


//this for chcking the connection for my databse.
if($conn){
    // echo "connection successfully";

}
else
{
    echo "no connection";
}
//it is for selecting database
//one is variable and other is databse name.
mysqli_select_db($conn, 's_l');


?>

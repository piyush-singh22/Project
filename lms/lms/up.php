<?php


try {
    


$server = "localhost";
$username = "root";
$password = "";
$database = "a_s";


//it is for connection and musqli_connwct is an function to connect with database and it takes some parameterslike as you can see.
$conn = mysqli_connect($server,$username,$password,$database);//hostname and username


//this for chcking the connection for my databse.
if($conn){
    echo "connection successfully";

}
else
{
    echo "no connection";
}
//it is for selecting database
//one is variable and other is databse name.

// mysqli_select_db($conn, 'a_s');
// error_reporting(0);
if (isset($_GET['submit'])){
    
    echo "working";
$id = $_GET['s_no'];
$n_o_c = $_GET['noc'];

    $q = "UPDATE a_s SET n_o_c='$n_o_c' where s_no = '$id' ";
    $result = mysqli_query($conn,$q);

if($result){
    echo "<script> alert('record updates') </script>";
        header("location:sbook.php");

}
else{
    echo "<script> alert('something is wrong') </script>";
    header("location:u.php");
}
}
}
    
 catch (exception $e) {
    echo "message:".$e->getMessage();
}




?>
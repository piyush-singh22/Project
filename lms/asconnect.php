<?php

session_start();
// header('location:home.php');

$conn = mysqli_connect('localhost','root');//hostname and username

if($conn){
    echo "connection successfully";

}
else
{
    echo "no connection";
}
//it is for selecting database
//one is variable and other is databse name.
mysqli_select_db($conn, 'as');

//now we will access the username and password from database

$b_id = $_POST['b_id'];
$b_name = $_POST['b_name'];
$b_author = $_POST['b_author'];
$s_code = $_POST['s_code'];
$n_o_c = $_POST['noc'];
$price = $_POST['price'];

$q = "select * from a_s where b_name = '$b_name' && b_author = '$b_author' ";

//in this there is two variable selected connection and qury.

$result = mysqli_query($conn,$q);

$num = mysqli_num_rows($result);
if($num == 1)
{
    echo "duplicate data";
}
else{

    $qy =" INSERT INTO `as`(`b_id`, `b_name`, `b_author`, `s_code`, `n_o_c`, `price`) VALUES ('$b_id','$b_name','$b_author','$s_code','$n_o_c','$price')";

    mysqli_query($conn, $qy);
}


?>
<?php
// include('connection.php');

// //now we will access the username and password from database
// $fn = $_POST['f_name'];
// $ln = $_POST['l_name'];
// $gn = $_POST['gn'];
// $email = $_POST['email'];
// $password = $_POST['password'];

// //now i will write query so that it get checked.
// $q = "update s_l set $fn='' "

include('connection.php');
// error_reporting(0);
if(isset($_GET['submit']))
{
$id = $_GET['s_no'];
$fn = $_GET['fn'];
$ln = $_GET['ln'];
$gn = $_GET['gn'];
$email = $_GET['email'];
$password = $_GET['password'];

$q = "UPDATE s_l SET fn='$fn',ln='$ln', gn = '$gn', email = '$email', password = '$password' where s_no = '$id' ";

$result = mysqli_query($conn,$q);

if($result){
    echo "<script> alert('record updates') </script>";
        header("location:suser.php");

}
else{
    echo "<script> alert('something is wrong') </script>";
    header("location:update.php");
}

}



?>
<?php
include('connection.php');

$id = $_GET['s_no'];

$q = "DELETE from s_l WHERE s_no='$id'";

$data = mysqli_query($conn,$q);

if($data){
  header('location:suser.php');
}
else{
  echo "there is something wrong";
}


?>
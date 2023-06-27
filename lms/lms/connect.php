<?php



session_start();
header('location:log.php');

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
mysqli_select_db($conn, 's_l');

//now we will access the username and password from database
$fn = $_POST['f_name'];
$ln = $_POST['l_name'];
$gn = $_POST['gn'];
$email = $_POST['email'];
$password = $_POST['password'];

//now i will write query so that it get checked.
$q = "select * from s_l where email = '$email' && password = '$password' ";

//in this there is two variable selected connection and qury.

$result = mysqli_query($conn,$q);

$num = mysqli_num_rows($result);
if($num == 1)
{
    echo "duplicate data";
}
else{
    $qy = "INSERT INTO `s_l`(`fn`, `ln`, `gn`, `email`, `password`) VALUES ('$fn','$ln','$gn','$email','$password')";

    mysqli_query($conn, $qy);

    echo "<script>alert(Sign up successfully.);</script>";

}




// session_start();
// header('location:log.php');

// $server = "localhost";
// $username = "root";
// $password = "";
// $database = "s_l";

// $fn = $_POST['f_name'];
// $ln = $_POST['l_name'];
// $gn = $_POST['gn'];
// $email = $_POST['email'];
// $password = $_POST['password'];


// //database connection
// // $conn = mysqli_connect($server, $username, $password, $database);

// // if($conn){
// //     echo "Success";
// // }
// // else{
// //     die("error".mysqli_connect_error);
// // }




// // database connection

// $conn = new mysqli('localhost','root','','s_l');
// if($conn->connect_error)
// {
//     die('connection Failed :' . $conn->connect_error );
// }
// else
// {
//     $sql = $conn->prepare("INSERT INTO `s_l`(`fn`, `ln`, `gn`, `email`, `password`) VALUES (?,?,?,?,?)");
//     $sql->bind_param("sssss",$fn,$ln,$gn,$email, $password);
//     $sql->execute();
//     echo"regeidtered successfully";
//     $sql->close();
//     $conn->close();
    
// }


?>
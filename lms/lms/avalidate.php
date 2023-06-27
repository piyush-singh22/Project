<?php

session_start();

$server = "localhost";
$username = "root";
$password = "";
$database = "admin";

$conn = mysqli_connect($server,$username,$password,$database);//hostname and username


//this for chcking the connection for my databse.
// if($conn){
//     echo "connection successfully";

// }
// else
// {
//     echo "no connection";
// }
//it is for selecting database
//one is variable and other is databse name.
mysqli_select_db($conn, 'admin');

//now we will access the username and password from database

$email = $_POST['email'];
$password = $_POST['password'];

//now i will write query so that it get checked.
$q = "select * from admin where email = 'admin@gmail.com' && password = '1234' ";

//in this there is two variable selected connection and qury.

$result = mysqli_query($conn,$q);


if($email != "" && $password != "")
{

//it calculate the number of rows in table for the given data from user. 
//it is also used for checking wateher the user has entered correct data or not.
$num = mysqli_num_rows($result);
// echo $num;
if($num == 1)
{
    
    //if condition is false then he will redirect in  admin login page.
    //here we will take session variable so that i can use it furthur.
    $_SESSION['email'] = $email;
    //if condition is true then he will redirect in home page.
    
    header('location:admin.php');
    
}
else{
    echo "something is wrong";
    header('location:ladmin.php');
    echo "wrong";
    echo " <script> alert('Enter the wrong data.'); </script> ";
}

}
else{
    
    echo " <script> var r = confirm('enter any data (Go Back )');
    if (r == true) {
        x = 'You pressed OK!';
    }
        
     else {
        x = 'You pressed Cancel!';
    } </script>  ";
}
?>
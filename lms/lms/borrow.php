<?php 
$server = "localhost";
$username = "root";
$password = "";
$database = "a_s";
$con = mysqli_connect($server,$username,$password,$database);//hostname and username
error_reporting(0);
// if($conn){
    //     echo "connected database";
// }
// else{
//     echo "not connected";

// }    
$idd = $_GET['s_no'];
$n_o_c = $_GET['n_o_c'];

$q = "select * from a_s where s_no='$idd'";

$data = mysqli_query($con,$q);
$total = mysqli_num_rows($data);
$result = mysqli_fetch_assoc($data);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            background-color: aliceblue;
        }
        input{
            padding: 6px;
            width:100%;
        }
    </style>
    
</head>
<body>
    <form action="" method="post" style="margin-top:270px; font-size: xx-large;" >
        <table  align="center">
            <tr>
                <td>
        <label for="un">User Name:</label></td><td>
        <input type="text" name="un" id="un"></td></tr>
            <tr><td>                            
        <label for="b_name">Book Name:</label></td><td>
        <input type="text" name="b_name" id="b_name" value="<?php echo $result['b_name'] ?>"></td></tr>
            <tr><td>                        
        <label for="b_id">Book id:</label></td><td>
        <input type="number" name="b_id" id="b_id" value="<?php echo $result['b_id'] ?>"></td></tr>
            <tr><td>                            
        <label for="id">Issue Date:</label></td><td>    
        <input type="date" name="id" id="id"></td></tr>
            <tr><td>                            
        <label for="rd">Return Date:</label></td><td>
        <input type="date" name="rd" id="rd"></td></tr>
    <tr align="center"><td>                                    
        <input type="submit" value="borrow" name="submit" id="submit" align="center"></td></tr>
</table>
    </form>
</body>
</html>







<?php

// if(isset($_GET['submit'])){

$server = "localhost";
$username = "root";
$password = "";
$database = "issue";
$conn = mysqli_connect($server,$username,$password,$database);//hostname and username

$un = $_POST['un'];
$b_name = $_POST['b_name'];
$b_id = $_POST['b_id'];
$id = $_POST['id'];
$rd = $_POST['rd'];
$q = "insert into i_b (un,b_name,b_id,id,rd) VALUES ('$un','$b_name','$b_id','$id','$rd')  ";

$data = mysqli_query($conn,$q);



//another connection
if($_POST['submit']){
$s = "localhost";
$u = "root";
$pass = "";
$db = "a_s";
$con = mysqli_connect($s,$u,$pass,$db);
// error_reporting(0);
// if($con){
//         echo "connected database";
// }
// else{
//     echo "not connected";

// }    
if($data){
    $n_o_c--;
    $query = "update a_s set n_o_c='$n_o_c' where s_no='$idd'";
    $d = mysqli_query($con,$query);
    if($d){
        // echo "om";
        header('location:usbook.php');
    }
    else{
        echo 'error';
    }
}
}
?>
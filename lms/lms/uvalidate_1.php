<?php
   include ('connection.php');
$id = $_GET['s_no'];
   $q = "SELECT * from s_l where s_no='$id' ";
    $data = mysqli_query($conn,$q);
    $total = mysqli_num_rows($data);
    $result = mysqli_fetch_assoc($data);
//     if(isset($_GET['s_no']) && isset($_GET['fn']) && isset($_GET['ln']) && isset($_GET['gn']) && isset($_GET['email']) && isset($_GET['password'])){
//        $s_no = $_GET["s_no"];
//        $fn = $_GET["fn"];
//        $ln = $_GET["ln"];
//        $gn = $_GET["gn"];
//        $email = $_GET["email"];
//        $password = $_GET["password"];
//        try {
           
           
//  $q = "SELECT * FROM s_l WHERE s_no = '$s_no' AND fn = '$fn' AND ln = '$ln' AND gn = '$gn' AND email = '$email' AND password = '$password'";
 
//  $data = mysqli_query($conn,$q);

//     if($data){
        
//         $total = mysqli_num_rows($data);
        
//         echo "total rows".$total;
       
//              if($total>0){

//                     $result = mysqli_fetch_assoc($data);
//             }
//         else{
//             echo "<script> alert('something is wrong'); </script>";
//         }
//     } 
//     else{
//         echo "unsuccessful".mysqli_error($conn);;
//     }
// } catch (mysqli_sql_exception $e) {
//     echo "error:".$e->getMessage();
// }

// }

// // if(!isset($q)){
// //     echo "u;";
// // }
// // else{
      
// //   }

?>
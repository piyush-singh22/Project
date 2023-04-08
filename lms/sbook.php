<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="js/bootstrap.bundle.min.js"></script>
    <style>
        body{
            background-color:whitesmoke;
        }
        td,th{
            padding:10px;
        }
      .sidebar {
  margin: 0;
  padding: 0;
  width: 200px;
  background-color: #f1f1f1;
  position: fixed;
  height: 100%;
  overflow: auto;
  font-family: lucida bright;
    font-size: xx-large;
    font-weight: 550;

}

.sidebar a {
  display: block;
  color: black;
  padding: 16px;
  text-decoration: none;
}
 
.sidebar a.active {
  background-color: #04AA6D;
  color: white;
}

.sidebar a:hover:not(.active) {
  background-color: #555;
  color: white;
}

    </style>
</head>
<body>
<div class="body">

    <div class="leftsidebar">
    <div class="sidebar">
  <a class="active" href="home.php">Home</a>
  <a href="dashboard.php">Add Book</a>
  <a href="sbook.php">Show Book</a>
  <a href="#about">About</a>
</div>
    </div>

    <!-- <table border=2px align="center">
    <th>
        <b>S.No.</b>
    </th> -->
    
            
            
           
           
           
        <?php
   $server = "localhost";
$username = "root";
$password = "";
$database = "a_s";
$conn = mysqli_connect($server,$username,$password,$database);//hostname and username
// error_reporting(0);
// if($conn){
    //     echo "connected database";
// }
// else{
//     echo "not connected";

// }
$q = "select * from a_s";
$data = mysqli_query($conn,$q);
$total = mysqli_num_rows($data);
// $result = mysqli_fetch_assoc($data);

if ($total != 0){
    while($result = mysqli_fetch_assoc($data)){
        echo "
        <tr>
        <table border=2px align='center' style = 'width:37%;'>
        <th>
            <b>S.No.</b>
        </th>
        <td>".$result['Serial_no']."</td>
        </tr>
       
        <tr>
        <th>
                <b>Book Id </b>
           </th>
           <td>".$result['b_id']."</td>
        </tr>
           <tr>
           <th>
                 <b>        Book Name</b>
            </th>
        <td>".$result['b_name']."</td>
        </tr>
        <tr>
        <th>
                <b>      Book Author</b>
            </th>
        <td>".$result['b_author']."</td>
        </tr>
        <tr>
        <th>
        <b>      Serial Code</b>
    </th>
        <td>".$result['s_code']."</td>
        </tr>
        <tr>
        <th>
        <b> Number of copies</b>
    </th>
        <td>".$result['n_o_c']."</td>
        </tr>
        <tr>
        <th>
        <b> Price </b>
     </th>
        <td>".$result['price']."</td>
        
        
        </tr>";
    }
}
else{
    echo "no records was found";
}




 
?>
    
        </table>
        </div>
    </body>
    </html>
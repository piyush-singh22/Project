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
    <script>
        function redirect(){
            location.assign('update.php')
        }
        function redirectfd(){
            location.assign('delete.php')
        }
    </script>
</head>
<body>
<div class="body">

    <div class="leftsidebar">
    <div class="sidebar">
  <a class="active" href="home.php">Home Page</a>
  
  <a href="usbook.php">Show Book</a>
  <!-- <a href="update.php">Update</a> -->
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
echo "
        <br><br>
        <tr class='bg-dark'>
        <table border=2px align='center' style = 'width:37%;'>
        <thead class='thead-dark'>
        <th>
        <b>S.No.</b>
        </th>
        <th>
        <b>Book Id </b>
        </th>
        <th>
        <b>        Book Name</b>
        </th>
        <th>
        <b>      Book Author</b>
        </th>
        <th>
        <b>      Serial Code</b>
    </th>
    <th>
    <b> Number of copies</b>
</th>
<th>
<b> Price </b>
</th>
<th>
Borrow
</th>
</thead>


</tr>";

if ($total != 0){
    while($result = mysqli_fetch_assoc($data)){

if($result['n_o_c']<=0){
    continue;
}
echo "
        <td class='text-warning bg-danger'>".$result['s_no']."</td>
        <td class='text-info bg-success'>".$result['b_id']."</td>
        <td class='bg-info'>".$result['b_name']."</td>
        <td class='bg-warning'>".$result['b_author']."</td>
        <td class='bg-danger'>".$result['s_code']."</td>
        <td class='bg-info'>".$result['n_o_c']."</td>
        <td class='bg-warning'>".$result['price']."</td>
        <td ><a class='btn btn-danger' href='borrow.php?s_no=$result[s_no]&n_o_c=$result[n_o_c]'> Borrow </a>
         
        </tr>
        
        ";
    }
}
else{
    echo "no records was found";
}


// <tr>
// <td align='center' float='left' class='btn btn-info' role='butoon' style='margin:3px;' > <a href='update.php'><b>UPDATE</b></a>
// </td>
// <td align='center' float='right'class='btn btn-info' role='butoon' style='margin:3px;'> <a href='delete.php'><b>DELETE</b></a>
// </td>
// </tr>


 
?>
    
        </table>
        </div>
    </body>
    </html>
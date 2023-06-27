<?php
include ('uvalidate_1.php');
?>
    
    <!-- <div class = "Container" style=" background-image: url(https://3.bp.blogspot.com/-IWM0_Rp9GLc/W3wtaA1MQJI/AAAAAAAAHYY/gTuPl8DeEmYfaHOLcluA2mgsPrZp82NywCLcBGAs/s1600/Library.png); 
    height: 100%;background-color: antiquewhite;background-repeat: no-repeat; background-attachment: fixed;  background-size: 100% 100%;  background-position: center; opacity:1 ">  -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <style>
        body{
            font-family:cursive;
        }
        .tab{
            font-size:33px;
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

/* @media (min-width: 1200px) */


    </style>
    

    
    
    
    
    <title>Library Managment System</title>
  </head>
  <body>
  <!-- <div class="leftsidebar">
  <div class="sidebar">
<a class="active" href="home.php">Home</a>
<a href="dashboard.php">Add Book</a>
<a href="sbook.php">Show Book</a> -->
<!-- <a href="update.php">Update</a> -->
</div>
  </div>

  <?php 
 
  
  ?>
    <!-- <img class="bg" src="https://img.jagranjosh.com/imported/images/E/Articles/ibps_po_prelims_books_bodyimage.jpg" alt="Image not found"   > -->
    <form action="uvalidate.php" method="get">
        <!-- <h1 align='center ' > Update Details: </h1> -->
        <table class="tab"  style=' border-spacing:12px; padding-left:56px;     margin-top: 106px; color:goldenrod; padding-bottom:0px; padding-top:0px; border-radius:50px; margin-right:355px; width:38%; opacity:0.9; box-sizing:content-box '  align="right">
         
        <tr>
        <td>
        <label  for="f_name"><b>First Name:</b></label>
        </td>
        <td>
        <input type="text" name="fn" value="<?php echo   $result['fn'];  ?>" id="fn" style="padding: 8px; width: 80%;">
        </td>
        <tr>
        <td>
        <label for="l_name"><b>Last Name:</b></label>
        </td>
        <td>
        <input type="text" name="ln" value="<?php echo  $result['ln']; ?>" id="ln" style="padding: 8px; width: 80%;">
        </td>
        </tr>
        <tr>
        <td>
        <label for="gn"><b>gn:</b></label>
        </td>
        <td style="font-size:x-large;" >
            <input type="radio" name="gn" value="<?php echo $result['gn'] ; ?>" id="gn" ><b> Male </b>
            <input type="radio" name="gn" id="female" >   <b> Female   </b>      
          
        </td>
        </tr>
        <tr>
        <td>
        <label for="email"><b>E-Mail:</b></label>
        </td>
        <td>
            <input type="email" name="email" value="<?php echo $result['email']; ?>" id="email" style="padding: 8px; width: 80%;">
        </td>
        </tr>
        <tr>
        <td>
        <label for="password"><b>password: </b></label>
        </td>
        <td>
            <input type="password" name="password" value="<?php echo  $result['password'];?>" id="password" style="padding: 8px; width: 80%;">
        </td>
        </tr>
        <tr  >
            <td>
               <b> 
                <input type="submit" value="Submit" name="submit">
                <input type="reset" value="reset">
                </b>
            </td>
        </tr>
    </form>
    
    </div>
</body>
</html>


<!-- 

// include('connection.php');
// error_reporting(0);
// if($_GET['submit'])
// {
// $fn = $_GET['fn'];
// $ln = $_GET['ln'];
// $gn = $_GET['gn'];
// $email = $_GET['email'];
// $password = $_GET['password'];

// $q = "UPDATE s_l SET fn='$fn',ln='$ln', gn = '$gn', email = '$email', password = '$password' ";

// $result = mysqli_query($conn,$q);

// if($result){
//     echo "<script> alert('record updates') </script>";
//     header("location:suser.php");

// }
// else{
//     echo "<script> alert('') </script>";
//     echo"";
// }

// }































<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="js/bootstrap.bundle.min.js"></script>
   
<form action="connect.php" method="get" style="margin:235px;"></form>
    <table align='center'>
    <tr>
        <td>
        <label  for="f_name"><b>First Name:</b></label>
        </td>
        <td>
        <input type="text" name="f_name" id="f_name" style="padding: 8px; width: 80%;">
        </td>
        <tr>
        <td>
        <label for="l_name"><b>Last Name:</b></label>
        </td>
        <td>
        <input type="text" name="l_name" id="l_name" style="padding: 8px; width: 80%;">
        </td>
        </tr>
        <tr>
        <td>
        <label for="gn"><b>gn:</b></label>
        </td>
        <td style="font-size:x-large;" >
            <input type="radio" name="gn" id="male" checked><b> Male </b>
            <input type="radio" name="gn" id="female" >   <b> Female   </b>      
          
        </td>
        </tr>
        <tr>
        <td>
        <label for="email"><b>E-Mail:</b></label>
        </td>
        <td>
            <input type="email" name="email" id="email" style="padding: 8px; width: 80%;">
        </td>
        </tr>
        <tr>
        <td>
        <label for="password"><b>password: </b></label>
        </td>
        <td>
            <input type="password" name="password" id="password" style="padding: 8px; width: 80%;">
        </td>
        </tr>
        <tr  >
            <td>
               <b> <input type="submit"     value="submit">
            
                <input type="reset" value="reset">
                </b>
            </td>
        </tr>
    </form>
    <th colspan='1'>
     <p style="color:black;" align="left"> <b> <a href="log.php">click </a> here to log in.  </b></p> 
    </th>
    <th colspan='1'>
     <p style="color:black;" align="left"> <b> <a href="ladmin.php">click </a> here if you are admin.  </b></p> 
    </th>
    </table>

</body>
</html> -->
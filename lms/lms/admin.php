<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="js/bootstrap.bundle.min.js"></script>
    <style>
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
  background-color: blue;
  color: white;
}

    </style>
    

    <title>Document</title>
</head>
<body>
 
    <div class="leftsidebar">
    <div class="sidebar">
      
  <!-- <a class="active" href="home.php">Home</a> -->
  <a href="admin.php" >Home Page</a>
  <a class="" href="dashboard.php">Add Book</a>
  <a class="danger" href="sbook.php">Show Book</a>
  <a class=""href="suser.php">Show User</a>
  <a class=""href="ibd.php">Show Issue Book Detail</a>
    
  <br><br>

</div>
    </div>

    

</body>
</html>
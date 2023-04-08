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
  background-color: #555;
  color: white;
}

    </style>
    

    <title>Document</title>
</head>
<body>
<div class="nav">
    <nav class="navbar navbar-inverse">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="home.php">Library Managment System</a>
        </div>
        <ul class="nav navbar-nav">
          <li class="active"><a href="home.php">Home</a></li>
          <li><a href="dashboard.php">Add Book</a></li>
          <li><a href="sbook.php">Show Book</a></li>
          <li><a href="suser.php">Show user</a></li>
        </ul>
      </div>
    </nav>
</div>
    <div class="leftsidebar">
    <div class="sidebar">
  <a class="active" href="home.php">Home</a>
  <a href="dashboard.php">Add Book</a>
  <a href="sbook.php">Show Book</a>
  <a href="suser.php">Show User</a>
</div>
    </div>

    <h1 align="center"> Welcome Mr.Piyush </h1>

</body>
</html>
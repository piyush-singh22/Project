<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <!-- <link rel="stylesheet" href="d_style.css"> -->
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
form{
    width: 1000px;
    font-size: 18px;
    color: darkgreen;
    padding-right: 15px;
    padding-left: 15px;
    margin-right: auto;
    margin-left: auto;
}

    </style>

</head>
<body>
    <!-- <div class="dash" style=" background-image: url(https://3.bp.blogspot.com/-IWM0_Rp9GLc/W3wtaA1MQJI/AAAAAAAAHYY/gTuPl8DeEmYfaHOLcluA2mgsPrZp82NywCLcBGAs/s1600/Library.png);  
    height: 100%;background-color: antiquewhite;background-repeat: no-repeat; background-attachment: fixed;  background-size: 100% 100%;  background-position: center; opacity:1 ">
    <h1 style="color:black;" align="center" >Dashboard</h1> -->
    
    
    
        <div class="leftsidebar">
        <div class="sidebar">
      <a class="active" href="home.php">Home</a>
      <a href="dashboard.php">Add Book</a>
      <a href="sbook.php">Show Book</a>
      <a href="#about">About</a>
    </div>
        </div>
    <form action="asconnect.php" method="post">
        <table border="2px" align="center" >
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
            <tr>
                
                <td>
                    <input type="number" name="b_id" id="b_id">
                </td>
                <td>
                    <input type="text" name="b_name" id="b_name">
                </td>
                <td>
                    <input type="text" name="b_author" id="b_author">
                </td>
                <td>
                    <input type="number" name="s_code" id="s_code">
                </td>
                <td>
                    <input type="number" name="noc" id="noc">
                </td>
                <td>
                    <input type="number" name="price" id="price">
                </td>
                <tr  >
            <td >
               <input type="submit" value="submit">
            
                <input type="reset" value="reset">
                
            </td>
        </tr>
            </tr>
        </table>
    </form>

    </div>

</body>
</html>


<!-- book id, book name , book author, serial code ,NUmber of copies,Price -->

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
   
    
    
    
        <div class="leftsidebar">
        <div class="sidebar">
      <a class="active" href="home.php">Home</a>
      <a href="dashboard.php">Add Book</a>
      <a href="sbook.php">Show Book</a>
      <!-- <a href="#update.php">update.php</a> -->
    </div>
        </div>
    <form action="asconnect.php" method="post">
        <table border="2px" align="center" style="padding:200px; border-collapse:unset; border-color:transparent;">
            
            <tr>
                <th>
                    <b>Book Id </b>
               </th>
           
           
                <td>
                    <input type="number" name="b_id" id="b_id">
                </td>
            </tr>
            <tr>
                <th>
                    <b>        Book Name</b>
                </th>    
                
                <td>
                    <input type="text" name="b_name" id="b_name">
                </td>
            </tr>
            <tr>
                <th>
                <b>      Book Author</b>
            </th>
                <td>
                    <input type="text" name="b_author" id="b_author">
                </td>
            </tr>  
            <tr>   
                 <th>
                     <b>      Serial Code</b>
                 </th>
                  
                 <td>
                     <input type="number" name="s_code" id="s_code">
                    </td>
                </tr>   
                <tr>
                    <th>
                       <b> Number of copies</b>
                   </th>
                      
                    <td>
                    <input type="number" name="noc" id="noc">
                </td>
            </tr>    
            <tr>    
                <th>
                    <b> Price </b>
                </th>
                    
                <td>
                    <input type="number" name="price" id="price">
                </td>
            </tr>    
                <tr>
            <td colspan="2" align="center"  >
               <input type="submit" value="submit">
            
                <input type="reset" value="reset">
                
            </td>
        </tr>
            
        </table>
    </form>

    </div>

</body>
</html>


<!-- book id, book name , book author, serial code ,NUmber of copies,Price -->

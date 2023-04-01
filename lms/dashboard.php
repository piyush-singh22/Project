<div class = "Container" >  
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="d_style.css">
</head>
<body>
    <div class="dash" style=" background-image: url(https://3.bp.blogspot.com/-IWM0_Rp9GLc/W3wtaA1MQJI/AAAAAAAAHYY/gTuPl8DeEmYfaHOLcluA2mgsPrZp82NywCLcBGAs/s1600/Library.png);  
    height: 100%;background-color: antiquewhite;background-repeat: no-repeat; background-attachment: fixed;  background-size: 100% 100%;  background-position: center; opacity:0.8 ">
    <h1 style="color:yellow;" align="center" >Dashboard</h1>

    <form action="" method="get">
        <table border="2px" align="center" style="border-spacing:8px; color:yellow; margin:129px; ">
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
</div>
</body>
</html>


<!-- book id, book name , book author, serial code ,NUmber of copies,Price -->
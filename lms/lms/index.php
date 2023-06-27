
    
    <div class = "Container" style=" background-image: url(https://3.bp.blogspot.com/-IWM0_Rp9GLc/W3wtaA1MQJI/AAAAAAAAHYY/gTuPl8DeEmYfaHOLcluA2mgsPrZp82NywCLcBGAs/s1600/Library.png); 
    height: 100%;background-color: antiquewhite;background-repeat: no-repeat; background-attachment: fixed;  background-size: 100% 100%;  background-position: center; opacity:1 "> 
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
    </style>

    
    
<title>Library Managment System</title>
</head>
<body>
    <!-- <img class="bg" src="https://img.jagranjosh.com/imported/images/E/Articles/ibps_po_prelims_books_bodyimage.jpg" alt="Image not found"   > -->
    <form action="connect.php" method="post">
        <table class="tab"  style=' border-spacing:12px; padding-left:56px;     margin-top: 133px; color:goldenrod; padding-bottom:50px; padding-top:50px; border-radius:50px; margin-left:4px; width:38%; opacity:0.9; box-sizing:content-box '  align="justify">
        
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
        <label for="Gender"><b>Gender:</b></label>
        </td>
        <td style="font-size:x-large;" >
          <select name="gn" id="gn">
            <option value="select">Select</option>
            <option value="Male">Male</option>
            <option value="Female">Female</option>

          </select>
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
    </div>
</body>
</html>


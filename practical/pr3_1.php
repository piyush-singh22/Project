<?php

echo " Calculator <br> <br> ";

$a = 2;
$b = 3;
$ch = 1;
echo "Addition : 1 <br>";
echo "Subtraction : 2 <br>";
echo "Multiplication : 3 <br>";
echo "Division : 4 <br>";
echo"<br>";
switch ($ch) {
    case 1:
        
        # code...
        $c=$a+$b;
        echo " Addition : $c <br>";
        break;
    case 1:
        # code...
        $c=$a-$b;
        echo " Subtraction : $c <br>";
        break;
    case 1:
        # code...
        $c=$a*$b;
        echo " Multiplication : $c <br>";
        break;
    case 1:
        # code...
        $c=$a/$b;
        echo " Division : $c <br>";
        break;
    default:
    echo "enter choice between (1-4)";
        # code...
        break;
}
?>
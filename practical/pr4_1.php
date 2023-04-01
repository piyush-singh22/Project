<?php
 $ch='nexon';

if ($ch == 'safari' || $ch == 'nexon' || $ch == 'tiago')
{
    echo "Company : TATA";
}
elseif ($ch == 'XUV700' || $ch == 'XUV300' || $ch == 'bolero')
{
    echo "Company : Mahindra";
}
elseif ($ch = 'i20' || $ch == 'Verna' || $ch == 'Venue' || $ch == 'Creta')
{
    echo " Company : Hyundai ";
}
elseif($ch = ' Swift ' || $ch == 'Alto' || $ch == 'Baleno' || $ch == 'Brezza')
{
    echo " Suzuki ";
}
else
    echo " enter valid car name ";



?>
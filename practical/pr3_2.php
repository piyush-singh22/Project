
<?php
$b_p = 50000;
echo "Basic Pay:".$b_p;
echo "<br>";
$da = ($b_p*50)/100;
$hra = ($b_p*10)/100;
$medical = ($b_p*4)/100;
$g_s = $b_p + $da + $hra + $medical ;
$insurance = ($g_s*7)/100;
$p_f = ($g_s*5)/100;
$deduction = $insurance + $p_f ; 
echo " Deduction :  ".$deduction;
echo "<br>";
$n_s = $g_s - $deduction;

echo "Net-Salary:".$n_s;
?>
<?php

$s = 98;
$h = 95;
$e = 97;
$m = 99;
$r = ($s + $h + $e + $m)/4;
// echo $r;

if ($r > 85 && $r <100)
{
    echo " Grade : AA ";
}
elseif($r > 75 && $r < 84)
{
    echo " Grade : AB ";
}
elseif($r > 65 && $r <74)
{
    echo " Grade : BB ";
}elseif($r > 55 && $r <64)
{
    echo " Grade : BC ";
}
elseif($r > 45 && $r <54)
{
    echo " Grade : CC ";
}
elseif($r > 40 && $r < 44)
{
    echo " Grade : CD ";
}
elseif($r > 35 && $r <39)
{
    echo " Grade : DD ";
}
else
{
    echo "Grade : FF"
}






?>
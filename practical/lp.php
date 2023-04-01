<?php

//     echo "index array:";
//     echo '<br>';
//     $arr = array(1,2,3);
//     foreach ($arr as  $val) {
//         # code...
//         echo "element:".$val."<br>";
//     }
//     echo '<br>';
//     // echo '<br>';
// // echo "Sum:";

// //     $sum=0;
// //     for($i=0;$i<3;$i++)
// //     {
// //         $sum+=$arr[$i];

// //     }
// //     echo $sum;
// //     echo '<br>';
//     echo '<br>';
// echo "associative array:";
// echo '<br>';
// // echo '<br>';
// $as=array('e_no' => 216090307096,'name'=>'Piyush','sem' => 4 );

//     foreach ($as as $key => $val) {

//         echo $key." => ".$val."<br>";
//         # code...
//     }

//     echo '<br>';echo '<br>';

//     echo "Multidimencinal array:";
//     echo '<br>';

//     $sr = array(
//         array(216090307096,'Piyush','4th','B'),
//         array(216090307095,'Satyaraj','4th','B'),
//         array(216090307097,'Akshat','4th','B')

//     );

//     for ($i=0; $i < 3 ; $i++) { 
//         for ($j=0; $j < 4; $j++) { 

//                 echo $sr[$i][$j]."   ";

//         }
//         echo '<br>';
//     }


// for ($i=1; $i <= 6; $i++) { 
//     for ($j=1; $j < $i ; $j++) { 
//         # code...
//         echo $j;
//     }
//     echo '<br>';
// }


$a = array(1,4,5,6,7,8);
echo 'count:'. count($a);
sort($a);
$b = array_reverse($a);
foreach($b as $p){
    echo $p."<br>";
}
echo array_search(4,$a);

// echo 'reverse:'.

?>
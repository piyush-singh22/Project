<?php
    $a = array(3,2,1);
    // $temp;
    $t=0;

    while($t==0){
        for ($i=0; $i < 3; $i++) { 
            # code...
            $b=$i++;
            if($a[$i] < $a[$b] ){
                $temp = $a[$i];
                $a[$i] = $a[$b];
                $a[$b] = $temp;
                $t=1;
            }
        }
    }

        // foreach($a as $p) { 
        //     # code...   
        //     echo "element:".$p.'<br>';
        // }

?>
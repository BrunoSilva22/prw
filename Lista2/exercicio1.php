<?php
    $num1 = 0;
    for($num=0; $num<100; $num++){
        if ($num % 2 == 0) {
           $num1 = $num + $num1;
        }
    }    

    echo $num1;
?>
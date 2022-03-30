<?php
for($num = 0; $num <= 200; $num++)
{
    $divisores = 0;
    for($a = $num; $a >= 1; $a--)
    {
        if (($num % $a) == 0) {
            $divisores++;
        }
    }

    if ($divisores == 2)
    {
        echo $num . ', ';
    }
}
?>
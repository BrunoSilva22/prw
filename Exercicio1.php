<?php
    $n1 = 98;
    $n2 = 77;
    $n3 = 54;

    if ($n1>$n2 && $n1>$n3) {
        if ($n2>$n3) {
            echo 'A ordem decrescente é ' . $n1 . ', ' . $n2 . ', ' . $n3;
        }

        else {
            echo 'A ordem decrescente é ' . $n1 . ', ' . $n3 . ', ' . $n2;
        }
    }

    else if ($n2>$n1 && $n2>$n3) {
        if ($n1>$n3) {
            echo 'A ordem decrescente é ' . $n2 . ', ' . $n1 . ', ' . $n3;
        }

        else {
            echo 'A ordem decrescente é ' . $n2 . ', ' . $n3 . ', ' . $n1;
        }
    }

    else {
        if ($n1>$n2) {
            echo 'A ordem decrescente é ' . $n3 . ', ' . $n1 . ', ' . $n2;
        }

        else {
            echo 'A ordem decrescente é ' . $n3 . ', ' . $n2 . ', ' . $n1;
        }
    }
?>
<?php
function chetnost($num){
    do {
        if ($num == 0) {
            print "$num - ноль<br>";
            $num++;
        }
        elseif ($num % 2 == 0) {
            print "$num - четное число<br>";
            $num++;
        }elseif ($num % 2 != 0) {
            print "$num - нечетное число<br>";
            $num++;
    }
    } while ($num <= 10);
    }
    echo chetnost(0);
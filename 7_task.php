<?php

$arg1=date("H");
$arg2=date("i");
//$arg1=5;
//$arg2=26;


function hour($hour){
    if ($hour == 1 || $hour == 21) {
        return "$hour час";
    } elseif ($hour >= 2 && $hour <= 4 || $hour >= 22 && $hour <= 24){
        return "$hour часа";
    } elseif ($hour >= 5 && $hour <= 20) {
        return "$hour часов";
    } elseif ($hour > 24) {
        return "Ошибка, такого часа нет";
    }

}


function minutes($minute){
      if ($minute == 1 || $minute == 21 || $minute == 31 || $minute == 41 || $minute == 51) {
        return "$minute минута";
    } elseif ($minute >= 2 && $minute< 5 || $minute >= 22 && $minute <= 24 || $minute >= 32 && $minute <= 34 || $minute >= 42 && $minute <= 44 || $minute >= 52 && $minute <= 54){
        return "$minute минуты";
    } elseif ($minute >= 5 && $minute < 21 || $minute >= 25 && $minute <= 30 || $minute >= 35 && $minute <= 40 || $minute >= 45 && $minute <= 50 || $minute >= 55 && $minute < 60 ) {
        return "$minute минут";
    } elseif ($minute > 60) {
        return "ошибка, такой минуты нет";
    }

}




echo hour($arg1);
echo " и ";
echo minutes($arg2);


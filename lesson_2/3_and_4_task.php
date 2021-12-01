<?php

function sum($a=1,$b=1)
{
    return $a + $b;
}


function diff($b=1,$c=1)
{
    return $b - $c;
}

function multi($b=1,$c=1)
{
    return $b * $c;
}

function divide($b=1,$c=1)
{
    return $b / $c;
}

function mathOperation($arg1, $arg2, $operation){
    switch($operation){
        case "sum";
            return sum($arg1,$arg2);
        case "diff";
            return diff($arg1,$arg2);
        case "multi";
            return multi($arg1,$arg2);
        case "divide";
            return divide($arg1,$arg2);
    }

}
echo mathOperation(50,20,sum)

?>


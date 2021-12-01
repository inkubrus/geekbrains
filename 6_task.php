<?php
$a = rand(2, 5);
$b = rand(2, 5);


echo 'Возводим число ' . $a . ' в степень ' . $b;

function power($val, $pow)
{
    if ($pow == 1) {
        return $val;
    }

    $answer = $val * power($val, $pow - 1);

    return $answer;
}

echo '<br>';
echo power($a, $b);

?>
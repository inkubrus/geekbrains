<?php
$russia = [
    'Московская область:' => ['Москва', 'Зеленоград', 'Клин'],
    'Ленинградская область:' => ['Санкт-Петербург', 'Всеволожск', 'Павловск', 'Кронштадт'],
    'Рязанская область:' => ['Рязань', 'Касимов', 'Скопин', 'Сасово']
];

function showCity($arr)
{
    if (!is_array($arr)) {
        return print "Неверное значение '{$arr}'";
    }
    foreach ($arr as $key => $value) {
        echo $key . '<br>';
        foreach ($value as $shit => $test) {
            if (mb_substr($test, 0, 1,) == 'К') {
                echo "$test.<br>";
            }
        }
    }
}

showCity($russia);


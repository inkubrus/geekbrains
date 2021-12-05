<?php
$menuArr = [
    'меню 1',
    'меню 2' => ['Подменю 1', 'Подменю 2', 'Подменю 3'],
    'меню 3' => ['Подменю 4' => ['Ещё глубже', 'Ещё глубже']]
];

function menuRender($arr)
{

    if (!is_array($arr)) {
        return 'incorrect argument';
    }

    $renderArr[] = '<ul>';
    foreach ($arr as $key => $value) {
        if (is_array($value)) {
            $renderArr[] = '<li>' . $key . menuRender($value) . '</li>';
        } else {
            $renderArr[] = '<li>' . $value . '</li>';
        }
    }
    $renderArr[] = '</ul>';

    return implode($renderArr);
}

echo menuRender($menuArr);

echo '<hr>';





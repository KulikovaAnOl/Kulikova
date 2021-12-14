<?php

echo '<title>Куликова А.О.</title>';
    echo "Треугольные числа: </br>";
    $treug = array();
    for ($i = 1; $i < 11; $i++) {
        $treug[] = $i * ($i + 1) / 2;
    }
    foreach ($treug as $key => $value) {
        echo "$value ";
    }
    echo "</br> Квадратные числа: </br>";
    $kvd = array();
    for ($i = 1; $i < 11; $i++) {
        $kvd[] = $i * $i;
    }
    foreach ($kvd as $key => $value) {
        echo "$value ";
    }

    echo "</br> Объедененный массив: </br>";
    $rez = array_merge($treug, $kvd);
    foreach ($rez as $key => $value) {
        echo "$value ";
    }

    echo "</br> Сортировка: </br>";
    sort($rez);
    foreach ($rez as $key => $value) {
        echo "$value ";
    }

    echo "</br> Удаление 1 элемента: </br>";
    unset($rez[0]);
    foreach ($rez as $key => $value) {
        echo "$value ";
    }
    echo "</br> Удаление повторов: </br>";
    $rez1 = array_unique($rez);
    foreach ($rez1 as $key => $value) {
        echo "$value ";
    }

    ?>
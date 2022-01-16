<?php

/*Задание #5
Создайте массив $bmw с ячейками:
model
speed
doors
year
Заполните ячейки значениями соответсвенно: “X5”, 120, 5, “2015”.
Создайте массивы $toyota' и '$opel аналогичные массиву $bmw (заполните данными).
Объедините три массива в один многомерный массив.
Выведите значения всех трех массивов в виде:
CAR name
name model speed doors year
Например:
CAR bmw
X5 120 5 2015*/



$bmv = [
    'model' => 'X5',
    'speed' => mt_rand(100, 200),
    'doors' => 5,
    'year' => mt_rand(2000, 2021)
];

$toyota = [
    'model' => 'Camry',
    'speed' => mt_rand(100, 180),
    'doors' => 4,
    'year' => mt_rand(2000, 2021)
];

$opel = [
    'model' => 'Insignia',
    'speed' => mt_rand(150, 220),
    'doors' => 4,
    'year' => mt_rand(2000, 2021)
];

$cars = ['BMV' => $bmv, 'TOYOTA' => $toyota, 'OPEL' => $opel];

foreach ($cars as $name => $car) {
    echo "Car <b>$name</b><br>";
    echo "{$car['model']} {$car['speed']} {$car['doors']} {$car['year']}<br><br>";
}
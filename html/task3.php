<?php

/*Задание #3
Создайте переменную $age.
Присвойте переменной $age произвольное числовое значение.
Напишите конструкцию if, которая выводит фразу: “Вам еще работать и работать” при условии,
что значение переменной $age попадает в диапазон чисел от 18 до 65 (включительно).
Расширьте конструкцию if, выводя фразу: “Вам пора на пенсию” при условии, что значение переменной $age больше 65.
Расширьте конструкцию elseif, выводя фразу: “Вам ещё рано работать” при условии,
что значение переменной $age попадает в диапазон чисел от 1 до 17 (включительно).
Дополните конструкцию ifelseif, выводя фразу: “Неизвестный возраст” при условии,
что значение переменной $age не попадет в вышеописанные диапазоны чисел.*/

$age = mt_rand(-100, 100);

if ($age <= 17 && $age >= 1) {
    echo "$age<br>Вам ещё рано работать";
} elseif ($age >= 18 && $age <= 65) {
    echo "$age<br>Вам еще работать и работать";
} elseif ($age > 65) {
    echo "$age<br>Вам пора на пенсию";
} else {
    echo "$age<br>Неизвестный возраст";
}
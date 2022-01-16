<?php

/*Задание #6
Используя цикл for, выведите таблицу умножения размером 10x10.
Таблица должна быть выведена с помощью HTML тега <table>.
Если значение индекса строки и столбца чётный, то результат вывести в круглых скобках.
Если значение индекса строки и столбца Нечётный, то результат вывести в квадратных скобках.
Во всех остальных случаях результат выводить просто числом.*/

const ROWS = 10;
const COLUMNS = 10;

echo '<table>';

for ($row = 1; $row <= ROWS; $row++){
    echo '<tr style="border: 1px solid;">';
    for ($col = 1; $col <= COLUMNS; $col++){
        $val = $row * $col;
        $left = '';
        $right = '';
        $color = '#ffffff';

        if ($row % 2 == 0 && $col % 2 == 0) {
            $left = '(';
            $right = ')';
            $color = '#74c476';
        } elseif ($row % 2 != 0 && $col % 2 != 0) {
            $left = '[';
            $right = ']';
            $color = '#a4e56d';
        }

        echo "<td style=\"border: 1px solid; background: $color;\">". $left . $val . $right . '</td>';

    }
    echo '</tr>';
}

echo '</table>';
<?php
// С помощью цикла do…while написать функцию для вывода чисел от 0 до 10, чтобы результат выглядел так:

// 0 – это ноль.
// 1 – нечетное число.
// 2 – четное число.
// 3 – нечетное число.
// …
// 10 – четное число.
$i = 0;

do {
    $string = "нечетное число";
    if ($i == 0) {
        $string = "ноль";
    } elseif (($i % 2) == 0) {
        $string = "четное число";
    }
    echo "$i - это " . $string . ".<br>";
} while (++$i <= 10);
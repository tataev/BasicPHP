<?php
// *Повторить третье задание, но вывести на экран только города, начинающиеся с буквы «К».
header("Content-type:text/html; charset=utf-8");

define("LETTER", "К");

$array = [
    "Московская область" => ["Москва", "Зеленоград", "Клин"],
    "Ленинградская область" => ["Санкт-Петербург", "Всеволожск", "Павловск", "Кронштадт"],
    "Архангельская область" => ["Архангельск", "Северодвинск", "Котлас", "Новодвинск"],
    "Липецкая область" => ["Липецк", "Елец", "Грязи", "Лебедянь", "Задонск", "Кривополянье"]
];
echo "<pre>";
var_dump($array);
echo "<br>";
foreach ($array as $state => $towns) {
    foreach ($towns as $key => $value) {
// mb_substr — Возвращает часть строки.
// Корректно выполняет substr() для многобайтовых кодировок, учитывая количество символов.
        if (mb_substr($value, 0, 1) == LETTER) {
            echo "$value\n";
            break;
        }
    }
}
echo "style>";
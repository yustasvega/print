<?php

//error_reporting(E_ALL & ~E_NOTICE & ~E_WARNING);
error_reporting(-1);

require_once 'funcs.php';

//var_dump($test);

if (file_exists('file.txt')) {
    unlink('file.txt');
}

@unlink('file.txt');
echo get_sum(1, 2);

/*
 * https://svyatoslav.biz/misc/psr_translation/
 * https://karashchuk.com/PHP/error_reporting-display_errors-display_startup_errors/
 *
 * PSR-1 – Базовый стандарт оформления кода
 * 1. В файлах НЕОБХОДИМО использовать только теги <?php и <?=.
 * 2. Файлы НЕОБХОДИМО представлять только в кодировке UTF-8 без BOM-байта.
 * 3. Константы классов ДОЛЖНЫ быть объявлены исключительно в верхнем регистре с использованием символа подчёркивания для разделения слов.
 *
 * PSR-2 – Рекомендации по оформлению кода
 * 1. Для оформления отступов ДОЛЖНЫ использоваться четыре пробела (но не знак табуляции).
 * 2. Открывающая фигурная скобка в определении функции ДОЛЖНА располагаться на новой строке, а закрывающая фигурная скобка ДОЛЖНА располагаться на следующей строке после тела функции.
 * 3. После ключевых слов в управляющих конструкциях ДОЛЖЕН располагаться один пробел, а после вызовов функций и методов – НЕ ДОЛЖЕН.
 * 4. Открывающая фигурная скобка в управляющих конструкциях ДОЛЖНА располагаться в той же строке, что и сама конструкция, а закрывающая фигурная скобка ДОЛЖНА располагаться на следующей строке после тела конструкции.
 * 5. После открывающей круглой скобки и перед закрывающей круглой скобкой в управляющих конструкциях НЕ ДОЛЖНО быть пробела.
 * */



/*$a=1+2;
if($a){
echo 'Test';
}

$a = 1 + 2;
if ($a)
{
    echo 'Test';
}*/

/*const TEST = 'TEST';
echo TEST;*/

/*if (true) {
    return;
}*/

/*function get_sum($a, $b)
{
    return;
}*/
//get_sum();



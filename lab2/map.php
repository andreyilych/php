<?php
 declare(strict_types=1);

 /**
  * Применяет функцию к каждому элементу массива.
  *
  * @param callable $a Функция.
  * @param array &$arr Массив.
  */
 function map(callable $func, array &$arr): void {
     foreach($arr as &$i) {
         $i = $func($i);
     }
 }

 /**
  * Возводит число в квадрат.
  *
  * @param float|int $a Число.
  *
  * @return float|int Квадрат $a.
  */
 $square = fn(float|int $a): float|int => $a * $a;

 $nums = [31, 32, 33, 34, 35, 36, 37, 38, 39, 40];
 
 map($square, $nums);

 echo 'Квадраты чисел от 31 до 40: ';
 foreach($nums as $i) {
     echo $i, ($i != $nums[count($nums) - 1]) ? ', ' : '.';
 }

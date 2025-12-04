<?php
 declare(strict_types=1);

 /**
  * Меняет местами значения двух переменных.
  *
  * @param mixed $x Первая переменная.
  * @param mixed $y Вторая переменная.
  */
 $swap = function(mixed &$x, mixed &$y): void {
     $t = $x;
     $x = $y;
     $y = $t;
 };

 $a = 5;
 $b = 8;

 $swap($a, $b);

 echo '<pre>';
 if ($b === 5) {
     echo 'b равно 5.', PHP_EOL;
 }
 if ($a === 8) {
     echo 'a равно 8.', PHP_EOL;
 }
 echo '</pre>';

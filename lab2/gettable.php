<?php
 declare(strict_types=1);

 /**
  * Отрисовывает таблицу умножения на странице.
  *
  * @param int $rows Количество строк.
  * @param int $cols Количество столбцов.
  * @param string $color Строка со значением цвета.
  *
  * @return int Количество вызовов данной функции.
  */
 function getTable(int $rows = 10, int $cols = 10,
                   string $color = 'yellow'): int {
     static $count = 0;

     $count++;

     echo '<table>';
     echo '<tbody>';

     for ($i = 1; $i <= $rows; $i++) {
         echo '<tr>';
       
         for ($j = 1; $j <= $cols; $j++) {
             if ($i == 1 || $j == 1) {
                 echo '<th style="background-color: ', $color, '">',
                 $i * $j, '</th>';
             }
             else {
                 echo '<td>', $i * $j, '</td>';
             }
         }

         echo '</tr>';
     }

     echo '</tbody>';
     echo '</table>';

     return $count;
 }
?>
<!DOCTYPE html>
<html lang="ru">
 <head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Таблица умножения</title>
  <style>
   table {
	border: 2px solid black;
	border-collapse: collapse;
   }
   th, td {
    padding: 10px;
	border: 1px solid black;
   }
   th {
	background-color: yellow;
   }
  </style>
 </head>
 <body>

  <h1>Таблица умножения</h1>
  <?php
   getTable(8, 5, 'lime');
   echo '<hr>';
   getTable(2, 2, 'black');
   echo '<hr>';

   getTable();
   echo '<hr>';
   getTable(7);
   echo '<hr>';
   $tabcount = getTable(9, 9);
   echo '<hr>';

   echo 'Количество таблиц на этой странице: ', $tabcount, PHP_EOL;
  ?>

 </body>
</html>

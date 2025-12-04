<?php
 declare(strict_types=1);
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
	background-color: lime;
   }
  </style>
 </head>
 <body>

  <h1>Таблица умножения</h1>
  <?php
   $cols = 5;
   $rows = 8;

   echo '<table>';
   echo '<tbody>';

   for ($i = 1; $i <= $rows; $i++) {
       echo '<tr>';
       
       for ($j = 1; $j <= $cols; $j++) {
           if ($i == 1 || $j == 1) {
               echo '<th>', $i * $j, '</th>';
           }
           else {
               echo '<td>', $i * $j, '</td>';
           }
       }

       echo '</tr>';
   }

   echo '</tbody>';
   echo '</table>';
  ?>

 </body>
</html>

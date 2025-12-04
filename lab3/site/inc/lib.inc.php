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
 
 /**
  * Создаёт меню на странице. 
  *
  * @param array $menu Массив из массивов с ключами 'link' (названием пункта)
  *                    и 'ref' (адресом, на который ссылается этот пункт).
  * @param bool $vertical При значении true создаёт вертикальное меню, а при
  *                       значении false — горизонтальное. По умолчанию true.
  */
 function getMenu(array $menu, bool $vertical = true): void {
     echo '<ul class="menu', $vertical ? '' : ' horizontal', '">';

     foreach ($menu as $navelement) {
         echo '<li><a href="', $navelement['href'], '">',
             $navelement['link'], '</a></li>';
     }

     echo '</ul>';
 }
 
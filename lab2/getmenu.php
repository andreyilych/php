<?php
 declare(strict_types=1);
 
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
?>
<!DOCTYPE html>
<html lang="ru">
 <head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Меню</title>
  <style>
   .menu {
	list-style-type: none;
	margin: 0;	
	padding: 0;
   }
   .horizontal li {
	display: inline;
	padding: 5px;
   }
  </style>
 </head>
 <body>

  <h1>Меню</h1>
  <?php
   $leftMenu = [['link' => 'Домой', 'href' => 'index.php'],
                 ['link' => 'О нас', 'href' => 'about.php'],
                 ['link' => 'Контакты', 'href' => 'contact.php'],
                 ['link' => 'Таблица умножения', 'href' => 'table.php'],
                 ['link' => 'Калькулятор', 'href' => 'calc.php'],];
   
   getMenu($leftMenu);
   getMenu($leftMenu, false);
  ?>

 </body>
</html>

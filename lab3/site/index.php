<?php
 declare(strict_types=1);
 include 'inc/lib.inc.php';
 include 'inc/data.inc.php';
 
 // Инициализация заголовков страницы
 $hour = getdate()['hours'];
 if (6 <= $hour && $hour < 12) {
     $welcome = 'Доброе утро';
 }
 elseif (12 <= $hour && $hour < 18) {
     $welcome = 'Добрый день';
 }
 elseif (18 <= $hour && $hour < 23) {
     $welcome = 'Добрый вечер';
 }
 else {
     $welcome = 'Доброй ночи';
 }
 $title = 'Сайт нашей школы';
 $header = "{$welcome}, Гость!";
 $id = strtolower(strip_tags(trim($_GET['id'] ?? '')));
 switch ($id) { 
	 case 'about':
		 $title = 'О сайте';
		 $header = 'О нашем сайте';
		 break;
	 case 'contact':
		 $title = 'Контакты';
		 $header = 'Обратная связь';
		 break;
	 case 'table':
		 $title = 'Таблица умножения';
		 $header = 'Таблица умножения';
		 break;
	 case 'calc':
		 $title = 'Онлайн-калькулятор';
		 $header = 'Калькулятор';
		 break; 
 }
?>
<!DOCTYPE html>
<html lang="ru">
 <head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?=$title?></title>
  <link rel="stylesheet" href="style.css">
 </head>
 <body>

  <header>
   <?php
    include 'inc/top.inc.php';
    
    echo '<span class="welcome">', $header, '</span>';
   ?>
  </header>
   
  <section>
   <?php
    switch ($id) {
	    case 'about':
     	    include 'about.php';
	  	    break;
	    case 'contact':
		    include 'contact.php';
		    break;
	    case 'table':
		    include 'table.php';
		    break;
	    case 'calc':
		    include 'calc.php';
		    break;
	    default:
		    include 'inc/index.inc.php'; 
    }
   ?>
  </section>
  
  <nav>
   <?php
    include 'inc/menu.inc.php';
   ?>
  </nav>
  
  <footer>
   <?php
    include 'inc/bottom.inc.php';
   ?>
  </footer>

 </body>
</html>

<!DOCTYPE html>
<html lang="ru">
 <head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Константы</title>
 </head>
 <body>
  <h1>Константы</h1>

  <?php
   echo '<pre>';

   define('C', 5);

   if (defined('C')) {
       echo 'C = ', C, PHP_EOL;
   }

   echo 'Текущая версия PHP: ', PHP_VERSION, PHP_EOL;

   echo 'Директория, в которой находится эта страница: ', __DIR__, PHP_EOL;
  ?>
 </body>
</html>

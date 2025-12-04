<!DOCTYPE html>
<html lang="ru">
 <head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Конструкции if-elseif-else</title>
 </head>
 <body>

  <h1>Конструкции if-elseif-else</h1>

  <?php
   echo '<pre>';

   $age = 20;
  
   if (18 <= $age && $age <= 59) {
       echo 'Вам ещё работать и работать', PHP_EOL;
   }
   elseif ($age > 59) {
       echo 'Вам пора на пенсию', PHP_EOL;
   }
   elseif (1 <= $age && $age <= 17) {
       echo 'Вам ещё рано работать', PHP_EOL;
   }
   else {
       echo 'Неизвестный возраст', PHP_EOL;
   }

   echo '</pre>';
  ?>

 </body>
</html>

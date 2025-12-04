<!DOCTYPE html>
<html lang="ru">
 <head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Массивы</title>
 </head>
 <body>
  <h1>Массивы</h1>
  
  <?php
   echo '<pre>';

   $bmw = ['model' => 'X5',
           'speed, km/h' => 120,
           'doors' => 5,
           'year' => '2006',
   ];
   $toyota = ['model' => 'Carina',
              'speed, km/h' => 130,
              'doors' => 4,
              'year' => '2007',
   ];
   $opel = ['model' => 'Corsa',
            'speed, km/h' => 140,
            'doors' => 5,
            'year' => '2007',
   ];

   echo 'bmw - ', implode(' - ', $bmw), PHP_EOL;
   echo 'toyota - ' , implode(' - ', $toyota), PHP_EOL;
   echo 'opel - ', implode(' - ', $opel), PHP_EOL;

   echo '</pre>';
  ?>
 </body>
</html>

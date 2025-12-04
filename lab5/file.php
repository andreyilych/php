<?php
 declare(strict_types=1);

 define('filename', 'db/guestbook.txt');
 
 if ($_SERVER['REQUEST_METHOD'] == 'POST') {
     $name = trim(strip_tags(htmlspecialchars($_POST['fname'])));
     $surname = trim(strip_tags(htmlspecialchars($_POST['lname'])));

     if ($name && $surname) {
         $guest = $surname . ' ' . $name . PHP_EOL;

         $f = fopen(filename, 'a');
         fwrite($f, $guest);
         fclose($f);
         
         header("Location: http://{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}");
     }
 }
?>
<!DOCTYPE html>
<html lang="ru">
 <head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Работа с файлами</title>
 </head>
 <body>

  <h1>Заполните форму</h1>

  <form method="post" action="<?=$_SERVER['PHP_SELF']?>">
   Имя: <input type="text" name="fname"><br>
   Фамилия: <input type="text" name="lname"><br>
   <br>
   <input type="submit" value="Отправить!">
  </form>

  <?php
   if (file_exists(filename)) {
       echo '<pre>';
       $fstrings = file(filename);
       $i = 1;
       foreach ($fstrings as $str) {
           echo $i++, ' ', $str, PHP_EOL;
       }
       echo 'Размер гостевой книги в байтах: ', filesize(filename);
       echo '</pre>';
   }
  ?>

 </body>
</html>

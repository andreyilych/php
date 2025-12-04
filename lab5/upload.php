<?php
 declare(strict_types=1);
?>
<!DOCTYPE html>
<html lang="ru">
 <head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Загрузка файла на сервер</title>
 </head>
 <body>

  <?php
   echo '<div>';

   if (isset($_FILES['fupload'])) {
       $f = $_FILES['fupload'];
       echo '<pre>';
       echo 'Имя файла: ', $f['name'], PHP_EOL;
       echo 'Размер файла в байтах: ', $f['size'], PHP_EOL;
       echo 'Имя временного файла: ', $f['tmp_name'], PHP_EOL;
       echo 'Тип файла: ', $f['type'], PHP_EOL;
       echo 'Код ошибки: ', $f['error'], PHP_EOL;

       if ($f['error'] == 0 &&
       mime_content_type($f['tmp_name']) == 'image/jpeg') {
           $filename = md5_file($f['tmp_name']);
           move_uploaded_file($f['tmp_name'],
           "upload/{$filename}.jpg");
       }

       echo '</pre>';
   }
    
   echo '</div>';
   if (!isset($_FILES['fupload']['error']) ||
   $_FILES['fupload']['error'] == 0) {
       echo '<form enctype="multipart/form-data"
       action="', $_SERVER['PHP_SELF'], '" method="post">
       <p>
       <input type="hidden" name="MAX_FILE_SIZE" value="10485760">
       <input type="file" name="fupload"><br>
       <button type="submit">Загрузить</button>
       </p>
       </form>';
   }
  ?>
 </body>
</html>

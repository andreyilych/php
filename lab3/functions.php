<?php
 declare(strict_types=1);
 
 echo '<h1>Загруженные функции</h1>';
 
 echo '<pre>';
 $extensions = get_loaded_extensions();
 $i = 0;
 
 foreach ($extensions as $extension) {
     echo '<h2>', $extension, '</h2>';
     $functions = get_extension_funcs($extension);
     print_r($functions);
     if ($functions) {
         $i += count($functions);
     }
 }
 
 echo 'Общее количество функций: ', $i, PHP_EOL;
 echo '</pre>';

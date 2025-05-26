<?php
   echo '<pre>';
   echo print_r($_POST);
   echo '</pre>'.'<br>';

   echo 'Ім*я файлу - ' . $_FILES['file']['name'].'<br>';
   echo 'Розмір файлу - ' . $_FILES['file']['size'].'<br>';
   echo 'Тип файлу - ' . $_FILES['file']['type'].'<br>';
   echo 'Де зберігається файл - ' . $_FILES['file']['tmp_name'].'<br>';
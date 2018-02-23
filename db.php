<?php
$connection = mysqli_connect('localhost', 'root', '3782', 'test_db'); //подключение к ДБ

if ( $connection == false)
{

  echo 'Не удалось подключиться к БД<br>';//обработка ошибки подключения
  echo mysqli_connect_error();
  exit();
}

?>
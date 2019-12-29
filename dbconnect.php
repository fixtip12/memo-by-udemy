<?php

$dsn = 'mysql:dbname=mydb;host=localhost;charset=utf8';
$user = 'root';
$password = 'daxcocoa126';
try {
  $db = new PDO($dsn, $user, $password);
} catch (PDOException $e) {
  echo 'DB接続エラー:' . $e->getMessage();
}

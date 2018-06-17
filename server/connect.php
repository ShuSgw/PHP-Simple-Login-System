<?php
$dsn = 'mysql:host=localhost;dbname=fakeRaddit';
$user = 'root';
$password = 'root';

  try {
    $db = new PDO($dsn, $user, $password);
  } catch(PDOException $e){
    echo $e->getMessage();
  }
  
?>
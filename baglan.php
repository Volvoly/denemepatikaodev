<?php
try {


$db=new PDO('mysql:host=localhost;dbname=dersler','root','12345678');
} catch(PDOException $e) {

  echo $e->getMessage();
}


?>
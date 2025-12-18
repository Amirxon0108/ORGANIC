<?php
$host = 'localhost';
$username = 'root';
$password='';
$db='organic_shop';
 $dsn = "mysql:host=$host;dbname=$db";
 $options=[
    PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false
 ];
try{

   $pdo= new PDO($dsn,$username,$password,$options);
}
catch(
    PDOException $e 
){
    die('xatolik'. $e->getMessage());
}


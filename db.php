<?php
$dsn = 'mysql:host=localhost;dbname=company';
$username ='root';
$password ='';
$option =[];
try{
    $connection = new PDO($dsn,$username,$password,$option);

}
catch(PDOException $e){
    throw new PDOException($e->getMessage(),(int)$e->getCode());

}
?>
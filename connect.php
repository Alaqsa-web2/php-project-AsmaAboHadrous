<?php
$db='mysql:host=localhost;dbname=newsocial';
// $host='localhost';
$user='root';
$pass='';


try{
    $con=new PDO($db,$user,$pass);
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e){
    echo 'faild to connect'. $e->getMessage();
}


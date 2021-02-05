<?php
try{
    $dsn = "mysql:host=localhost;dbname=auth_php";
    $con = new PDO($dsn, 'root', '', array(

        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'
    ));
}catch(PDOException $e){
    echo 'Failed to connect to database' . $e->getMessage();
    die();
}


<?php
require 'environment.php';
$config = array();

if(ENVIRONMENT == 'development'){
    define("BASE_URL", "http://localhost/");
    $config['dbname'] = 'classificados';
    $config['host'] = 'mysqldb';
    $config['dbuser'] = 'master';
    $config['dbpass'] = 'master';
}else{
    define("BASE_URL", "http://site.com/");
    $config['dbname'] = 'classificados';
    $config['host'] = 'mysqldb';
    $config['dbuser'] = 'master';
    $config['dbpass'] = 'master';
}

global $db;
try{
    $db = new PDO("mysql:dbname=".$config['dbname'].";host=".$config['host'], $config['dbuser'],$config['dbpass']);
} catch(PDOException $e) {
    echo "ERRO: ".$e->getMessage();
    exit;
}
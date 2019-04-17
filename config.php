<?php
require 'environment.php';

$config = array();
if(ENVIRONMENT == 'development'){
    define("BASE_URL", "http://localhost/novaeletro/");
    $config['dbname']='novaeletro';
    $config['host']='localhost';
    $config['dbuser']='root';
    $config['dbpass']='';
}else{
     define("BASE_URL", "http://didipedras.com.br/");
  
    $config['dbname']='u897872209_didi';
    $config['host']='localhost';
    $config['dbuser']='u897872209_didi';
    $config['dbpass']='didi998921840';
}
    
    
global $db;
try {
	$db = new PDO("mysql:dbname=".$config['dbname'].";host=".$config['host'],$config['dbuser'],$config['dbpass']);
} catch(PDOException $e) {
	echo "FALHOU: ".$e->getMessage();
	exit;
}

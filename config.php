<?php

require 'environment.php';

$config = array();

if(ENVIRONMENT == 'desenvolvimento'){
	
	define("BASE_URL","//lista_usuarios.pc/");
	$config['dbname'] = 'listagem';
	$config['dbuser'] = 'root';
	$config['dbpass'] = '';
	$config['host'] = 'localhost';
	
}else{
	
	define("BASE_URL","//projeto_lista_usuarios-master/");
	$config['dbname'] = 'listagem';
	$config['dbuser'] = 'root';
	$config['dbpass'] = '';
	$config['host'] = 'localhost';
	
}

global $db;

try{
	
	$db = new PDO("mysql:dbname=".$config['dbname'].";host=".$config['host'], $config['dbuser'], $config['dbpass']);
	
}catch(PDOException $e){
	echo "ERRO: ".$e->getMessage();
	exit;
}
?>

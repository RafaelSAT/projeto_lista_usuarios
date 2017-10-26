<?php

header('Content-Type:'.'text/plain');

require '../config.php';

global $db;
		
	$sql = $db->prepare("SELECT * FROM lista");
	$sql->execute();	
	
	if($sql->rowCount() > 0){
			
		foreach($sql->fetchAll() as $resultado){
			
			$dados[] = array(
				'nome' => $resultado['nome'],
				'telefone' => $resultado['telefone'],
				'sexo' => $resultado['sexo'],
				'tipo' => $resultado['tipo']
			);			
		}
		echo json_encode($dados, JSON_PRETTY_PRINT);
	}
?>
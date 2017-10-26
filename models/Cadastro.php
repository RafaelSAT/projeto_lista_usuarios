<?php

require '../config.php';

global $db;
	
	if(isset($_POST['campo_nome']) && !empty($_POST['campo_nome'])){
			
		if(isset($_POST['campo_telefone']) && !empty($_POST['campo_telefone'])){
				
			$nome = addslashes($_POST['campo_nome']);
			$telefone = addslashes($_POST['campo_telefone']);
			$sexo = $_POST['sexo'];
				
			if($sexo == 'Masculino'){
					
				$tipo = 1;
					
			}else{
					
				$tipo = 2;
				
			}
			
			$sql = $db->prepare("INSERT INTO lista (nome, telefone, sexo, tipo) VALUES (:nome, :telefone, :sexo, :tipo)");
			$sql->bindValue(':nome', $nome);
			$sql->bindValue(':telefone', $telefone);
			$sql->bindValue(':sexo', $sexo);
			$sql->bindValue(':tipo', $tipo);
			$sql->execute();
		}
	}
?>
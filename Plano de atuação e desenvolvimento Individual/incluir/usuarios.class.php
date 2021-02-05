<?php

class usuario{

		public function login($usuario, $senha){
			global $pdo;

		$sql = "SELECT * FROM usuario WHERE usuario = :usuario AND senha = :senha";
		$sql = $pdo->prepare($sql);
		$sql->bindValue("usuario", $usuario);
		$sql->bindValue("senha", md5($senha));
		$sql->execute();

		if($sql->rowCount() > 0){
			$dado = $sql->fetch();

			$_SESSION['id'] = $dado['id'];

		return true;


		}else{
			return false;
		}
	}

		public function logged($id){
			global $pdo;
	  
			$array = array();

			$sql = "SELECT nome FROM usuario WHERE id = :id";
			$sql = $pdo->prepare($sql);
			$sql->bindvalue("id", $id);
			$sql->execute();
	  
	  
			if($sql->rowcount() > 0){
				$array = $sql->fetch();
			} 
			return $array;
			}
		}
			?>
	

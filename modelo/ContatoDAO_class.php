<?php

	include_once("ConnectionFactory_class.php");//PDO
	include_once("Contato_class.php"); //entidade
	
	class TarefaDAO {
	//DAO - Data Access Object	
	//CRUD - Creat, Read, Update e Delete
	//operações básicas de banco de dados
	
		public $con = null; //obj recebe conexão
		
		public function __construct(){
			$conF = new ConnectionFactory();
			$this->con = $conF->getConnection();
		}
	
		//adicionar
		public function adicionar($tarefa) {
			try {
				$stmt = $this->con->prepare(
					"INSERT INTO manu (img, name, dsc, price) 
            		VALUES (:img, :name, :dsc, :price)");
		
				// Liga os parâmetros aos valores da tarefa
				$stmt->bindValue(":img", $tarefa->getImg());
				$stmt->bindValue(":name", $tarefa->getName());
				$stmt->bindValue(":dsc", $tarefa->getDsc());
				$stmt->bindValue(":price", $tarefa->getPrice());
		
				$stmt->execute(); // Executa o SQL
		
				// Trate as ações após a inserção da tarefa...
			} catch(PDOException $ex) {
				echo "Erro: " . $ex->getMessage();
			}
		}
		
		
		//alterar
		public function alterar($tarefa) {
			try {
				$stmt = $this->con->prepare(
					"UPDATE menu SET img = :img, name = :name, dsc = :dsc, price = :price WHERE id = :id"
				);
		
				// Liga os parâmetros aos valores da tarefa
				$stmt->bindValue(":img", $tarefa->getImg());
				$stmt->bindValue(":name", $tarefa->getName());
				$stmt->bindValue(":dsc", $tarefa->getDsc());
				$stmt->bindValue(":price", $tarefa->getPrice());
				$stmt->bindValue(":id", $tarefa->getId());
		
				$this->con->beginTransaction();
				$stmt->execute(); // Execução do SQL	
				$this->con->commit(); // Confirmação de tudo ok
			} catch(PDOException $ex) {
				echo "Erro: " . $ex->getMessage();
			}
		}
		
		//excluir
		public function excluir($cont){
			try{
				$num = $this->con->exec("DELETE FROM menu WHERE id = " . $cont->getId());
				//numero de linhas afetadas pelo comando
				
				if($num >= 1){
					return 1;
				} else {
					return 0;
				}
			}
			catch(PDOException $ex){
				echo "Erro: " . $ex->getMessage();
			}
		}
	
		//listar
		public function listar($query = null){
			try {
				if($query == null){
					$dados = $this->con->query("SELECT * FROM menu");
				} else {
					$dados = $this->con->query($query);
				}
		
				$lista = array();
		
				foreach($dados as $linha){
					$tarefa = new Tarefa();
					$tarefa->setId($linha["id"]);
					$tarefa->setIma($linha["img"]); // Adicione as novas linhas para os campos adicionais
					$tarefa->setName($linha["name"]);
					$tarefa->setDsc($linha["dsc"]);
					$tarefa->setPrice($linha["price"]);
		
					$lista[] = $tarefa;
				}
		
				return $lista; 
			} catch(PDOException $ex){
				echo "Erro: " . $ex->getMessage();
			}
		}
		
		
		//exibir 
		public function exibir($id){			
			try{				
				$lista = $this->con->query("SELECT * FROM menu WHERE id = " . $id);
				
				$dado = $lista->fetchAll(PDO::FETCH_ASSOC);
				
				$tarefa = new Tarefa();
				$tarefa->setId($dado[0]["id"]);
				$tarefa->setImg($dado[0]["img"]); // Corrigindo o campo para 'title'
				$tarefa->setName($dado[0]["name"]);
				$tarefa->setDsc($dado[0]["dsc"]);
				$tarefa->setPrice($dado[0]["price"]);
				
				return $tarefa;	
			}
			catch(PDOException $ex){
				echo "Erro: " . $ex->getMessage();
			}
		}		
	}
?>
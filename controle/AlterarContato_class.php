<?php
	include_once("./modelo/ContatoDAO_class.php");
	
	class AlterarTarefa{
		public function __construct(){		
			if(isset($_POST["enviar"])){
				//formulário enviar foi enviado
				
				$c = new Tarefa();
				$c->setId($_POST["id"]);
				$c->setImg($_POST["img"]); // Atribua valores aos novos campos
				$c->setName($_POST["name"]);
				$c->setDsc($_POST["dsc"]);
				$c->setPrice($_POST["price"]);
				$c->setCategoria($_POST["categoria"]);
				
				$dao = new TarefaDAO();
				$dao->alterar($c);
				
				$status = "Alteração do Contato " . $c->getName() . " efetuada com sucesso";
				
				$lista = $dao->listar();
				
				include_once("visao/listaContato.php");
				
			} else{
			
				$dao = new TarefaDAO();
				$cont = $dao->exibir($_GET["id"]);
				include_once("./visao/formAlteraContato.php");	
			
			}
		}
	}

?>

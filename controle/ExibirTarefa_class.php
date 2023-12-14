<?php

	include_once("modelo/ContatoDAO_class.php");
	
	class ExibirTarefa{
	
		public function __construct(){
			
			$dao = new TarefaDAO();
			$cont = $dao->exibir($_GET["id"]);
			include_once("visao/exibeContato.php");	
			
		}
	}

?>

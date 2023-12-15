<?php
include_once("modelo/ContatoDAO_class.php"); // Importe o DAO de Tarefa

class AdicionarTarefa {
    public function __construct() {
        if (isset($_POST["enviar"])) {
            $tarefa = new Tarefa(); // Criar um objeto de Tarefa
			$tarefa->setImg($_POST["img"]); // Atribua valores aos novos campos
			$tarefa->setName($_POST["name"]);
			$tarefa->setDsc($_POST["dsc"]);
			$tarefa->setPrice($_POST["price"]);
			$tarefa->setCategoria($_POST["categoria"]);
            // Defina outros campos da tarefa, se necessário

            $dao = new TarefaDAO(); // Instancie o DAO de Tarefa
            $dao->adicionar($tarefa); // Adicione a nova tarefa ao banco de dados

            $status = "Cadastro da tarefa '" . $tarefa->getName() . "' efetuado com sucesso";
            // Mensagem de status após a adição da tarefa

            // Redirecione ou inclua a visão de listagem de tarefas aqui
            // Exemplo de redirecionamento para outra página:
            // header("Location: listaTarefas.php");
			$lista = $dao->listar();
			include_once("./visao/listaContato.php");
        } else {
            include_once("visao/formCadastroContato.php");
            // Se o formulário não foi enviado, inclua o formulário de cadastro de tarefa
        }
    }
}
?>

<?php
include_once("../modelo/ContatoDAO_class.php");

class ListarTarefas {
    public function __construct() {
        try {
            // Acessar o modelo
            $dao = new TarefaDAO();
            // Iniciou a conexão com o BD
            $lista = $dao->listar();

            $formattedData = [];
            foreach ($lista as $tarefa) {
                $formattedData[] = [
                    "id" => $tarefa->getId(),
                    "img" => $tarefa->getImg(),
                    "name" => $tarefa->getName(),
                    "dsc" => $tarefa->getDsc(),
                    "price" => $tarefa->getPrice(),
                    "categoria" => $tarefa->getCategoria()
                ];
            }

            // Configura o cabeçalho para indicar que a resposta é JSON
            header('Content-Type: application/json');

            // Imprime os dados em formato JSON
            echo json_encode($formattedData);

            //include_once("./visao/listaContato.php");
        } catch (PDOException $ex) {
            // Em caso de erro, retorna um JSON indicando o erro
            http_response_code(500); // Define o código de erro HTTP para 500 (erro interno do servidor)
            echo json_encode(["error" => $ex->getMessage()]);
        }
    }
}
?>

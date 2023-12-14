<?php
session_start();

// ROTEADOR

if (isset($_GET["fun"])) {
    $fun = $_GET["fun"];

    if ($fun == "adicionar") {
        include_once("controle/AdicionarTarefa_class.php");
        $pag = new AdicionarTarefa();
    } elseif ($fun == "alterar") {
        include_once("controle/AlterarContato_class.php");
        $pag = new AlterarTarefa();

    } elseif ($fun == "excluir") {
        include_once("controle/ExcluirTarefa_class.php");
        $pag = new ExcluirTarefa();
    } elseif ($fun == "listar") {
        include_once("controle/ListarTarefas_class.php");
        $pag = new ListarTarefas();
    } elseif ($fun == "exibir") {
        include_once("controle/ExibirTarefa_class.php");
        $pag = new ExibirTarefa();
    } else {
        include_once("controle/ListarTarefas_class.php");
        $pag = new ListarTarefas();
    }
} else {
    include_once("controle/ListarTarefas_class.php");
    $pag = new ListarTarefas();
}

?>

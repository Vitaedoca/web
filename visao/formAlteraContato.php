<!DOCTYPE html>
<html>
<head>
    <title>Alterar Tarefa</title>
    <meta charset="UTF-8">
    <style>
        /* Estilos CSS */
        body {
            font-family: 'Poppins', sans-serif;
            font-family: 'Roboto', sans-serif;
            background-color: #1E1E24;
            color: white;
            margin: 20px;
        }

        h1 {
            text-align: center;
        }

        form {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            gap: 10px;
            margin-top: 20px;
        }

        label {
            color: #FF8303;
        }

        input[type="text"],
        textarea,
        input[type="checkbox"],
        input[type="submit"] {
            width: 350px;
            padding: 8px;
            background-color: #1E1E24;
            border: 1px solid #FF8303;
            color: white;
        }

        textarea {
            height: 100px; /* Definindo a altura do textarea */
            resize: vertical; /* Permite que o usuário redimensione verticalmente */
        }

        input[type="checkbox"] {
            width: auto;
        }

        input[type="submit"] {
            width: auto;
            cursor: pointer;
            background-color: #FF8303;
            border: 1px solid #FF8303;
        }
    </style>
</head>
<body>
    <h1>Alterar Tarefa</h1>

    <form action="contato.php?fun=alterar" method="POST">
        <input type="hidden" name="id" value="<?php echo $cont->getId(); ?>" />

        <label for="titulo"> Título: </label>
		<input type="text" id="titulo" name="title" value="<?php echo $cont->getTitle(); ?>" />

        <label for="descricao"> Descrição: </label>
        <textarea id="descricao" name="descricao"><?php echo $cont->getDescricao(); ?></textarea>

        <!-- Campo para indicar se a tarefa está concluída ou não (opcional) -->
        <label for="concluida"> Concluída: </label>
        <input type="checkbox" id="concluida" name="concluida" value="1" <?php echo ($cont->getConcluida() ? 'checked' : ''); ?> />

        <input type="submit" name="enviar" value="Salvar Alterações" />
    </form>
</body>
</html>

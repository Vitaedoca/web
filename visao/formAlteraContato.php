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

    <div class="container">
        <div class="cadastro">
            <form action="contato.php?fun=alterar" method="POST"> <!-- Arquivo PHP para alterar os dados no banco -->
                <input type="hidden" name="id" value="<?php echo $cont->getId(); ?>" />

                <label for="img">URL da Imagem:</label>
                <input type="text" id="img" name="img" value="<?php echo $cont->getImg(); ?>" />

                <label for="name">Nome da Tarefa:</label>
                <input type="text" id="name" name="name" value="<?php echo $cont->getName(); ?>" />

                <label for="dsc">Descrição da Tarefa:</label>
                <textarea id="dsc" name="dsc"><?php echo $cont->getDsc(); ?></textarea>

                <label for="price">Preço da Tarefa:</label>
                <input type="text" id="price" name="price" value="<?php echo $cont->getPrice(); ?>" />

                <label for="categoria">Categoria da Tarefa:</label>
                <input type="text" id="categoria" name="categoria" value="<?php echo $cont->getCategoria(); ?>" />

                <input type="submit" name="enviar" value="Salvar Alterações" />
            </form>
        </div>
    </div>
</body>
</html>

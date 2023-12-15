<!DOCTYPE html>
<html>
<head>
    <title>Autorização de Exclusão</title>
    <meta charset="UTF-8">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            font-family: 'Roboto', sans-serif;
            background-color: #1E1E24;
            color: white;
            margin: 20px;
            text-align: center;
        }

        h1 {
            color: #FF8303;
        }

        a {
            color: white;
            text-decoration: none;
            margin: 10px;
        }

        a:hover {
            color: #FF8303;
        }
    </style>
</head>
<body>
    <h1>Confirmar exclusão de <?php echo $cont->getName(); ?></h1>

    <h2><a href="contato.php?fun=excluir&conf=sim&id=<?php echo $cont->getId();?>">Sim</a></h2>
    <h2><a href="contato.php?fun=listar">Não</a></h2>
</body>
</html>

<!DOCTYPE HTML>
<html>
<head>
    <title>Listagem de Tarefas</title>
    <meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="./styles/styles.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;600&family=Roboto:wght@300;400&display=swap" rel="stylesheet">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;600&family=Roboto:wght@300;400&display=swap');
        
        body {
            font-family: 'Poppins', sans-serif;
            font-family: 'Roboto', sans-serif;
            background-color: #1E1E24;
            color: white;
            margin: 20px;
        }

        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            margin-top: 20px;
        }

        .cadastro form {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            gap: 10px;
            padding: 20px;
            border-radius: 10px;
            background-color: rgba(30, 30, 36, 0.7);
        }

        .cadastro form input[type="text"],
        .cadastro form input[type="submit"],
        .cadastro form textarea {
            width: 350px;
            padding: 8px;
            background-color: #1E1E24;
            border-color: #FF8303;
            color: white;
            border-radius: 5px;
        }

        .cadastro form input[type="submit"] {
            width: auto;
            padding: 8px 20px;
            background-color: #FF8303;
            border-color: #FF8303;
            cursor: pointer;
        }

		.cadastro form button {
            padding: 6px 12px;
            background-color: #FF8303;
            border: none;
            color: white;
            cursor: pointer;
            border-radius: 5px;
        }

		table {
            border-collapse: collapse;
            width: 100%;
            max-width: 800px;
            margin-top: 20px;
        }

        table, th, td {
            border: 1px solid #FF8303;
        }

        th, td {
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #FF8303;
            color: white;
        }

        tr:nth-child(even) {
            background-color: rgba(255, 255, 255, 0.1);
        }

        tr:hover {
            background-color: rgba(255, 255, 255, 0.2);
        }

    </style>
</head>
<body>
	
    <div class="container">
        <div class="cadastro">
            <h1>Cadastro de Tarefa</h1>
            <form action="contato.php?fun=adicionar" method="POST">
                <!-- Seus campos de entrada -->
                <input type="text" id="title" name="title" />
                <textarea id="descricao" name="descricao" rows="4" cols="50"></textarea>

                <input type="submit" name="enviar" value="Enviar" />
            </form>
        </div>
    </div>
	
	
	<div class="container">
		<?php
		
		// Se $status está preenchida, imprime ela
		?>
		<br /><br />
	
		<table>
			<tr> 
				<th>ID</th>
				<th>Title</th>
				<th>Descrição</th>
				<th>Concluída</th>
				<th>Editar</th>
				<th>Excluir</th>
			</tr>
			<!-- Primeira linha da tabela com o cabeçalho -->
			
			<?php
			// Assume que o controle passou uma lista de tarefas
			foreach ($lista as $tarefa) {
				echo "<tr>"; 
				echo "<td>" . $tarefa->getId() . "</td>";
                echo "<td><span>" . ($tarefa->getConcluida() ? '<s>' . $tarefa->getTitle() . '</s>' : $tarefa->getTitle()) . "</span></td>";
                echo "<td><span>" . ($tarefa->getConcluida() ? '<s>' . $tarefa->getDescricao() . '</s>' : $tarefa->getDescricao()) . "</span></td>";
				echo "<td>" . ($tarefa->getConcluida() ? 'Sim' : 'Não') . "</td>";
				echo "<td><a href=contato.php?fun=alterar&id=" . $tarefa->getId() . "><img src='visao/img/update.png' width='30px'/></a></td>"; 
				echo "<td><a href=contato.php?fun=excluir&id=" . $tarefa->getId() . "><img src='visao/img/delete.png' width='30px' /></a></td>";    
				echo "</tr>";    
			}   
			?>  
		</table>
	</div>
</body>
</html>

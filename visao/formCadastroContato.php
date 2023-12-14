<!DOCTYPE html>
<html>
<head>
    <title>Cadastrar Tarefa</title>
    <meta charset="UTF-8">
</head>
<body>
    <h1>Cadastro de Tarefa</h1>
    
    <form action="contato.php?fun=adicionar" method="POST">
        <label for="descricao">Descrição:</label>
        <input type="text" id="descricao" name="descricao" /> <br />
        
        <!-- Campo para indicar se a tarefa está concluída ou não (opcional) -->
        <label for="concluida">Concluída:</label>
        <input type="checkbox" id="concluida" name="concluida" value="1" /> <br />
        
        <input type="submit" name="enviar" value="Enviar" />
    </form>
</body>
</html>

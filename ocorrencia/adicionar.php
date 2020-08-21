<!DOCTYPE html>
<?php
session_start();
$nome = $_SESSION['Usuario']['nome'];
?>
<html>
    <head>
        <title>Ocorrências</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>  
        <h2>Cadastrar Ocorrência</h2>
        <br>
        <small>Campos Obrigatórios!</small>
        <form action="adicionar_controler.php" method='post'>
        <label>Nome</label><br>
        <input type="text" id="nome" name="nome" required="true" maxlenght="50" value="<?php echo $nome; ?>">
        <br>
        <label>Data</label> <br>
        <input type="date" id="data" name="data" required="true" maxlength="10">
        <br>
        <label>Hora</label> <br>
        <input type="time" id="hora" name="hora" required="true" maxlength="8">
        <br>
        <label>Descrição</label> <br>
        <textarea type="text" id="descricao" name="descricao" required="true" maxlength="200"></textarea>
        <br><br>
    <button type="submit">Salvar</button>
    <button type="button" onclick="location.href= '/home.php'">Voltar</button>
        </form>
    </body>
</html>

<!DOCTYPE html>
<?php
session_start();
$nome = $_SESSION['Usuario']['nome'];
?>
<html>
    <head>
        <title>Reuniões</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>  
        <h2>Agendar Reunião</h2>
        <br>
        <small>Campos Obrigatórios!</small>
        <form action="adicionar_controler.php" method='post'>
        <label>Data</label> <br>
        <input type="date" id="data" name="data" required="true" maxlength="10">
        <br>
        <label>Hora</label> <br>
        <input type="time" id="hora" name="hora" required="true" maxlength="8">
        <br>
        <label>Assunto</label> <br>
        <textarea type="text" id="assunto" name="assunto" required="true" maxlength="200"></textarea>
        <br><br>
    <button type="submit">Salvar</button>
    <button type="button" onclick="location.href= '/home.php'">Voltar</button>
        </form>
    </body>
</html>

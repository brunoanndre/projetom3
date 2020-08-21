<!DOCTYPE html>
<?php
session_start();
$nome = $_SESSION['Usuario']['nome'];
?>
<html>
    <head>
        <title>Achados e Perdidos</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>  
        <h2>Cadastrar Item</h2>
        <br>
        <small>Campos Obrigatórios!</small>
        <form action="adicionar_controler.php" method='post'>
        <label>Item</label><br>
        <input type="text" id="item" name="item" required="true" maxlenght="50">
        <br>
        <label>Data</label> <br>
        <input type="date" id="data" name="data" required="true" maxlength="10">
        <br>
        <label>Local Encontrado</label> <br>
        <input type="text" id="local" name="local" required="true" maxlength="8">
        <br><br>
    <button type="submit">Salvar</button>
    <button type="button" onclick="location.href= '/home.php'">Voltar</button>
        </form>
    </body>
</html>

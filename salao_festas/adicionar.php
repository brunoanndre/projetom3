<!DOCTYPE html>
<?php
session_start();
$nome = $_SESSION['Usuario']['nome'];
?>
<html>
    <head>
        <title>Salao de Festas</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>  
        <h2>Reservar Salão de Festas</h2>
        <br>
        <small>Campos Obrigatórios!</small>
        <form action="adicionar_controler.php" method='post'>
        <br>   
        <label>Nome</label> <br>
        <input type="text" id="nome" name="nome" required="true" maxlenght="50" value="<?php echo $nome; ?>">
        <br>
        <label>Data</label> <br>
        <input type="date" id="data" name="data" required="true" maxlength="10">
        <br>
        <label>Horario</label> <br>
        <input type="time" id="horario" name="horario" required="true" maxlength="8">
        <br>
        <label>Quantidade de convidados</label> <br>
        <input type="number" id="qtd_convidados" name="qtd_convidados" required="true" maxlength="10">
        <br>
        <label>Convidados</label> <br>
        <textarea type="text" id="convidados" name="convidados" required="true" maxlength="200"></textarea>
        <br><br>
    <button type="submit">Salvar</button>
    <button type="button" onclick="location.href= '/home.php'">Voltar</button>
        </form>
    </body>
</html>

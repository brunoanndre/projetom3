<!DOCTYPE html>
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
        <br>
        <form>
            <label>Nome</label> <br>
        <input type="text" id="nome" name="nome" required="true" maxlenght="50">
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
        <input type="text" id="convidados" name="convidados" required="true" maxlength="200">
        <br><br>
    <button type="submit">Salvar</button>
    <button type="button" onclick="location.href= '/index.php'">Voltar</button>
        </form>
    </body>
</html>

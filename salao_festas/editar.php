<!DOCTYPE html>
<?php include('../Condominio/config.php');
 session_start();
 
if($_GET['id'] !== $_SESSION['Usuario']['id']){
    echo "Você não tem permissão para editar essa reserva!";
    echo "<br>";
    echo "<button type=\"button\" onclick=\"location.href='../home.php'\">Voltar</button>";
    exit();
}
 
 
if(isset($_GET['id'])){
$sql = "SELECT NOME,DATA,HORA,CONVIDADOS,QTD_CONVIDADOS FROM RESERVA_SALAO RS
       INNER JOIN CONDOMINOS C ON RS.ID_CONDOMINOS = C.ID WHERE C.ID=" .$_GET['id'];
    if($result = $mysqli->query($sql)){
        $row= $result->fetch_row();
        $nome = $row[0];
        $data = $row[1];
        $hora = $row[2];
        $convidados = $row[3];
        $qtd_convidados = $row[4];
        $id = $_GET['id'];
    }
}
?>

<html>
    <head>
        <title>Salao de Festas</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>  
        <h2>Editar Reserva</h2>
        <br>
        <small>Campos Obrigatórios!</small>
        <br>
        <form action="editar_controler.php?id=<?php echo $id;?>" method="post">
        <label>Nome</label> <br>
        <input type="text" id="nome" name="nome" required="true" maxlenght="50" value="<?php echo $nome;?>">
        <br>
        <label>Data</label> <br>
        <input type="date" id="data" name="data" required="true" maxlength="10" value="<?php echo $data;?>">
        <br>
        <label>Horario</label> <br>
        <input type="time" id="horario" name="horario" required="true" maxlength="8" value="<?php echo $hora;?>">
        <br>
        <label>Quantidade de convidados</label> <br>
        <input type="number" id="qtd_convidados" name="qtd_convidados" required="true" maxlength="10" value="<?php echo $qtd_convidados;?>">
        <br>
        <label>Convidados</label> <br>
        <textarea type="text" id="convidados" name="convidados" required="true" maxlength="200"><?php echo $convidados;?></textarea>
        <br><br>
    <button type="submit">Salvar</button>
    <button type="button" onclick="location.href= '/home.php'">Voltar</button>
        </form>
    </body>
</html>

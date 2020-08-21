<!DOCTYPE html>
<?php include('../Condominio/config.php');
 session_start();
 
if($_GET['id'] !== $_SESSION['Usuario']['id']){
    echo "Você não tem permissão para editar essa ocorrência!";
    echo "<br>";
    echo "<button type=\"button\" onclick=\"location.href='../home.php'\">Voltar</button>";
   exit();
}

if(isset($_GET['id'])){   
$id = $_GET['id']; 
$sql = "SELECT nome, data,hora,descricao,o.id FROM ocorrencia o
INNER JOIN condominos c ON o.id_condominos = c.id WHERE id_condominos=" .$_GET['id'];
if($result = $mysqli->query($sql)){
    $row= $result->fetch_row();
    $nome = $row[0];
    $data = $row[1];
    $hora = $row[2];
    $descricao = $row[3];
    $idocorrencia = $row[4]; 
   
    
}
} 

?>

<html>
    <head>
        <title>Ocorrências</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>  
        <h2>Editar Ocorrência</h2>
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
        <label>Hora</label> <br>
        <input type="time" id="hora" name="hora" required="true" maxlength="8" value="<?php echo $hora;?>">
        <br>
        <label>Descrição</label> <br>
        <textarea type="text" id="descricao" name="descricao" required="true" maxlength="200"><?php echo $descricao;?></textarea>
        <br><br>
    <button type="submit">Salvar</button>
    <button type="button" onclick="location.href= '/home.php'">Voltar</button>
        </form>
    </body>
</html>

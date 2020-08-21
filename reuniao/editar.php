<!DOCTYPE html>
<?php include('../Condominio/config.php');
 session_start();

if(isset($_GET['id'])){   
    $id = $_GET['id']; 
    $sql = "SELECT data,hora,assunto,id_condominos FROM reuniao WHERE id=" .$_GET['id']; 
    if($result = $mysqli->query($sql)){
        $row= $result->fetch_row(); 
        $data = $row[0];
        $hora = $row[1];
        $assunto = $row[2];
      
    }
} 

?>

<html>
    <head>
        <title>Reuniões</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>  
        <h2>Editar Reunião</h2>
        <br>
        <small>Campos Obrigatórios!</small>
        <br>
        <form action="editar_controler.php?id=<?php echo $id;?>" method="post">
        <br>
        <label>Data</label> <br>
        <input type="date" id="data" name="data" required="true" maxlength="10" value="<?php echo $data;?>">
        <br>
        <label>Hora</label> <br>
        <input type="time" id="hora" name="hora" required="true" maxlength="8" value="<?php echo $hora;?>">
        <br>
        <label>Assunto</label> <br>
        <textarea type="text" id="assunto" name="assunto" required="true" maxlength="200"><?php echo $assunto;?></textarea>
        <br><br>
    <button type="submit">Salvar</button>
    <button type="button" onclick="location.href= '/home.php'">Voltar</button>
        </form>
    </body>
</html>

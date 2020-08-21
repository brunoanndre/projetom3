<!DOCTYPE html>
<?php include('../Condominio/config.php');
 session_start();

if(isset($_GET['id'])){   
    $id = $_GET['id']; 
    $sql = "SELECT item,data,local_encontrado FROM achados_perdidos WHERE id=" .$_GET['id'];
    if($result = $mysqli->query($sql)){
        $row= $result->fetch_row(); 
        $item = $row[0];
        $data = $row[1];
        $local = $row[2];
    }
} 
?>

<html>
    <head>
        <title>Achados e Perdidos</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>  
        <h2>Editar Item</h2>
        <br>
        <small>Campos Obrigatórios!</small>
        <br>
        <form action="editar_controler.php?id=<?php echo $id;?>" method="post">
        <br>
        <label>Item</label> <br>
        <input type="text" id="item" name="item" required="true" maxlength="10" value="<?php echo $item;?>">
        <br>
        <label>Data</label> <br>
        <input type="date" id="data" name="data" required="true" maxlength="8" value="<?php echo $data;?>">
        <br>
        <label>Local Encontrado</label> <br>
        <input type="text" id="local" name="local" required="true" maxlength="200" value="<?php echo $local;?>">
        <br><br>
    <button type="submit">Salvar</button>
    <button type="button" onclick="location.href= '/home.php'">Voltar</button>
        </form>
    </body>
</html>

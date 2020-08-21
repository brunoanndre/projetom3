<?php

include('../Condominio/config.php');
session_start();

if($_POST['data'] == ""){
    echo"Por favor, informe a data da reunião";
}else if($_POST['hora'] == ""){
    echo"Por favor, informe o horário da reunião";
}else if($_POST['assunto'] == ""){
    echo"Por favor, informe o assunto da reunião";
}else{
    $data = $_POST['data'];
    $hora = $_POST['hora'];
    $id = $_GET['id'];
    $idd = $_SESSION['Usuario']['id'];  
    $assunto = $_POST['assunto'];

$sql = "UPDATE reuniao SET  data = '$data', hora = '$hora', assunto = '$assunto',id_condominos = '$idd' WHERE id = " . $id;
if($mysqli->query($sql)){
    echo "Reunião editada!";
}else{
    echo "Erro ao editar a reunião, contate o administrador do sistema!";
}
}

$mysqli->close();
?>
<br>
<button type="button" onclick="location.href='../reuniao/editar.php?id=<?php echo $id;?>'">Voltar</button>


